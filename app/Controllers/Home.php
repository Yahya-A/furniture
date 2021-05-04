<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		// $active = \menu('dashboard');
		// $data = [
        //     'active_menu'   => $active
        // ];

		return view('furniture/home');
	}

    // public function test(){
    //     \dd(\get_browser($_SERVER['HTTP_USER_AGENT']));
    // }

    public function dashboard(){
        // \dd(session()->get());
        $active = \menu('dashboard');
		$data = [
            'active_menu'   => $active
        ];

        return view('furniture-admin/dashboard', $data);
    }

    public function logs(){
        // \dd(session()->get());
        

        $active = \menu('logs');
		$data = [
            'active_menu'   => $active
        ];

        return view('furniture-admin/setting/logs_login', $data);
    }

	public function register(){
		return view('furniture/register');
	}

	// public function register_customer(){
    //     $company_name = $this->request->getPost('company_name');
    //     $fname = $this->request->getPost('fname');
    //     $lname = $this->request->getPost('lname');
    //     $position = $this->request->getPost('position');
    //     $st_address = $this->request->getPost('st_address');
    //     $city = $this->request->getPost('city');
    //     $state = $this->request->getPost('state');
    //     $country = $this->request->getPost('country');
    //     $post_code = $this->request->getPost('post_code');
    //     $phone = $this->request->getPost('phone');
    //     $website = $this->request->getPost('website');
    //     $extension = $this->request->getPost('extension');
    //     $fax = $this->request->getPost('fax');
    //     $customer_group = $this->request->getPost('customer_group');

    //     $email = $this->request->getPost('email');
    //     $allow_login = $this->request->getPost('allow_login');
    //     $role = $this->request->getPost('role');
    //     $is_approve = $this->request->getPost('is_approve');

	// 	\dd($this->request->getVar());
    // }
}
