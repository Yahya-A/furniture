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
		$active = \menu('','active','','','','');
		$price = $this->mPricing->getPrice();
		$data = [
            'active_menu'   => $active,
			'price'			=> $price
        ];

		return view('furniture-admin/master/customer/pricing_list', $data);
	}
}
