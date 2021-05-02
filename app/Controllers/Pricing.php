<?php

namespace App\Controllers;

use App\Models\ModelPricing;

class Pricing extends BaseController
{

	protected $mPricing;

	public function __construct()
    {
        $this->mPricing = new ModelPricing();
        // $this->mCategories = new ModelCategories();
    }

	public function price_list()
	{
		$active = \menu('role');
		$price = $this->mPricing->getPrice();
		$data = [
            'active_menu'   => $active,
			'price'			=> $price
        ];

		return view('furniture-admin/master/customer/pricing_list', $data);
	}

	public function delete_price(){
        $id_price = base64_decode($this->request->getGet('id'));

        $this->mPricing->delete($id_price);

        return redirect()->to('price_list');
    }

	public function save_price()
    {
        $id_price = $this->request->getPost('id_price');
        
        $price_name = $this->request->getPost('price_name');
        $desc = $this->request->getPost('desc');
        $rate = $this->request->getPost('rate');

        if (!empty($id_price)) {
                $price = [
                    'id_price'   => $id_price,
                    'price_name'      => $price_name,
                    'description'      => $desc,
                    'rate'      => $rate,
                ];
        }else{
                $price = [
                    'price_name'      => $price_name,
                    'description'      => $desc,
                    'rate'      => $rate,
                ];
        }
        // \dd($price);
        $this->mPricing->save($price);

        return redirect()->to('price_list');
    }
}
