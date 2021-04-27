<?php

namespace App\Controllers;

use App\Models\ModelOrder;

class Export extends BaseController
{
	protected $mOrder;

    public function __construct()
    {
        $this->mOrder = new ModelOrder();
    }

	public function generate_pdf(){
        // return view('template/template_generate_pdf');
        $id_order = base64_decode($this->request->getGet('id'));

        $active = \menu('','','','','','','active','');
		$order = $this->mOrder->getOrder($id_order);
		$data = [
            'active_menu'   => $active,
            'order'         => $order,
            'create'     => date('Y-m-d h:i:s')
        ];

		$dompdf = new \Dompdf\Dompdf(); 

        // Sending data to view file
        $dompdf->loadHtml(view('template/template_generate_pdf', $data));
        // setting paper to portrait, also we have landscape
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();
        // Download pdf
        // $dompdf->stream(); 
        // to give pdf file name
        // $dompdf->stream("myfile");
        $dompdf->stream("ORDER # ". $order[0]['no_order'] .".pdf");

        return redirect()->to(base_url('furniture-admin/transactions/order/item_order'));
	}
}
