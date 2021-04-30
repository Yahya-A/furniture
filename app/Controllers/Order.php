<?php

namespace App\Controllers;

use App\Models\ModelOrder;
use App\Models\ModelCustomer;
use App\Models\ModelProduct;

class Order extends BaseController
{
	protected $mOrder;
	protected $mCustomer;
	protected $mProduct;

    public function __construct()
    {
        $this->mOrder = new ModelOrder();
        $this->mProduct = new ModelProduct();
        $this->mCustomer = new ModelCustomer();
    }

	public function test(){
		dd($this->request->getVar());
	}

	public function index()
	{
		$active = \menu('active');
		$data = [
            'active_menu'   => $active
        ];

		return view('furniture-admin/dashboard', $data);
	}

	public function new_order()
	{
		$active = \menu('item_order');
		$data = [
            'active_menu'   => $active,
        ];

		return view('furniture-admin/transactions/order/add_order', $data);
	}

	public function list_item_order(){
		$active = \menu('item_order');
		$orders = $this->mOrder->getOrder();
		$data = [
            'active_menu'   => $active,
            'orders'   => $orders
        ];

		return view('furniture-admin/transactions/order/list_item_order', $data);
	}

	public function item_order(){
		$id_order = \base64_decode($this->request->getGet('id'));

		$active = \menu('item_order');
		$order = $this->mOrder->getOrder($id_order);
		$data = [
            'active_menu'   => $active,
            'order'   => $order
        ];

		return view('furniture-admin/transactions/order/item_order', $data);
	}

	public function save_order(){
		
		$cek_no_order = $this->mOrder->getOrder();
		$cek_last_no = $this->mOrder->getLastID();
		
		if (count($cek_no_order) == 0) {
			$number = 1;
		}else{
			$number = $cek_last_no[0]['no_order']+1;
		}

		$prod_id = $this->request->getPost('product_id');
		$width = $this->request->getPost('width');
		$weight = $this->request->getPost('weight');
		$depth = $this->request->getPost('depth');
		$height = $this->request->getPost('height');
		$total_price = $this->request->getPost('total_price');
		$qty = $this->request->getPost('qty');
		$note = $this->request->getPost('note');
		$id_cus = $this->request->getPost('id_cus');
		$no_order = str_pad($number, 5, '0', STR_PAD_LEFT);
		
		$active = \menu('item_order');
		$r = array();
        for ($i = 0; $i < sizeof($prod_id); $i++) {
            $r[] = array(
                'no_order' => $no_order,
                'id_prod' => $prod_id[$i],
                'weight' => $weight[$i],
                'depth' => $depth[$i],
                'height' => $height[$i],
                'width' => $width[$i],	
                'qty' => $qty[$i],	
                'total_price' => $total_price[$i],	
                'date_order' => date('Y-m-d h:i:s'),	
                'date_accepted' => date('Y-m-d h:i:s'),	
                'status' => 'accept',	
                'note' => $note,	
                'id_customer' => $id_cus[$i],	
            );
        };
		// \dd($r);
		$this->mOrder->insertBatch($r);

		return redirect()->to('/order/list_item_order');
	}

	public function getData(){
		$id_prod = $this->request->getPost('id_prod');
		$id_cus = $this->request->getPost('id_cus');
        $product = $this->mProduct->getProduct($id_prod);
        $customer = $this->mCustomer->getCustomer($id_cus);
        $data = [
            'product'   => $product,
            'customer'   => $customer,
        ];

        return $this->response->setJSON($data);
	}

	public function generate(){
		$dompdf = new \Dompdf\Dompdf(); 

        
        // Sending data to view file
        $dompdf->loadHtml(view('pdf/template-students', ["students" => $data]));
        // setting paper to portrait, also we have landscape
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();
        // Download pdf
        $dompdf->stream(); 
        // to give pdf file name
        // $dompdf->stream("myfile");

        return redirect()->to(base_url('list-student'));
	}
}
