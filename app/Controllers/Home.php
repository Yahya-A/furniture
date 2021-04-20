<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('furniture-admin/dashboard');
	}
}
