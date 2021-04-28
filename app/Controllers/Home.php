<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$active = \menu('dashboard');
		$data = [
            'active_menu'   => $active
        ];

		return view('furniture-admin/dashboard', $data);
	}

	// public function test(){
	// 	dd($active = \menu('product_new'));
	// }

	// function link($a='', $b=''){
	// 	$coba = [
	// 		'a' => $a,
	// 		'b'	=> $b
	// 	];

	// 	return $coba;
	// }
}
