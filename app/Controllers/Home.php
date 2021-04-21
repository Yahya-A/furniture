<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$active = \menu('active');
		$data = [
            'active_menu'   => $active
        ];

		return view('furniture-admin/dashboard', $data);
	}
}
