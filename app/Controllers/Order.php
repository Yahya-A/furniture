<?php

namespace App\Controllers;

use App\Models\ModelOrder;

class Order extends BaseController
{
	protected $mOrder;

    public function __construct()
    {
        $this->mOrder = new ModelOrder();
    }

	public function index()
	{
		$active = \menu('active');
		$data = [
            'active_menu'   => $active
        ];

		return view('furniture-admin/dashboard', $data);
	}

	public function list_item_order(){
		$active = \menu('','','','','','','active','');
		$orders = $this->mOrder->getOrder();
		$data = [
            'active_menu'   => $active,
            'orders'   => $orders
        ];

		return view('furniture-admin/transactions/order/list_item_order', $data);
	}

	public function item_order(){
		$id_order = \base64_decode($this->request->getGet('id'));

		$active = \menu('','','','','','','active','');
		$order = $this->mOrder->getOrder($id_order);
		$data = [
            'active_menu'   => $active,
            'order'   => $order
        ];

		return view('furniture-admin/transactions/order/item_order', $data);
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
