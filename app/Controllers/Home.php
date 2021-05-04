<?php

namespace App\Controllers;

use App\Models\ModelCategories;
use App\Models\ModelSubCategories;
use App\Models\ModelPricing;

class Home extends BaseController
{
    protected $mCategories;
    protected $mSubCategories;
    protected $mPricing;

    public function __construct()
    {
        $this->mCategories = new ModelCategories();
        $this->mSubCategories = new ModelSubCategories();
        $this->mPricing = new ModelPricing();
    }

    public function index()
    {
        // $active = \menu('dashboard');
        // $data = [
        //     'active_menu'   => $active
        // ];

        return view('furniture/home');
    }

    public function about_us()
    {
        $menu = $this->mCategories->getCategory(false, 4);
        $sub_menu = $this->mSubCategories->getSubCategory(false, 4);
        $data = [
            'menu' => $menu,
            'sub_menu' => $sub_menu
        ];

        return view('furniture/about', $data);
    }

    public function contact_us()
    {
        $menu = $this->mCategories->getCategory(false, 4);
        $sub_menu = $this->mSubCategories->getSubCategory(false, 4);
        $data = [
            'menu' => $menu,
            'sub_menu' => $sub_menu
        ];

        return view('furniture/contact_us', $data);
    }

    public function product_list()
    {
        // dd($this->request->getVar());
        $menu = $this->mCategories->getCategory(false, 4);
        $sub_menu = $this->mSubCategories->getSubCategory(false, 4);
        $data = [
            'menu' => $menu,
            'sub_menu' => $sub_menu
        ];

        return view('furniture/contact_us', $data);
    }

    public function dashboard()
    {
        $active = \menu('dashboard');
        $data = [
            'active_menu'   => $active
        ];

        return view('furniture-admin/dashboard', $data);
    }

    // public function logs(){
    //     // \dd(session()->get());
        

    //     $active = \menu('logs');
	// 	$data = [
    public function logs()
    {
        $active = \menu('logs');
        $data = [
            'active_menu'   => $active
        ];

        return view('furniture-admin/setting/logs_login', $data);
    }

	// public function register(){
	// 	return view('furniture/register');
	// }

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
    public function register()
    {
        $menu = $this->mCategories->getCategory(false, 4);
        $sub_menu = $this->mSubCategories->getSubCategory(false, 4);
        $price = $this->mPricing->getPrice();
        $data = [
            'menu' => $menu,
            'sub_menu' => $sub_menu,
            'price' => $price
        ];
        return view('furniture/register', $data);
    }

    public function login()
    {
        $menu = $this->mCategories->getCategory(false, 4);
        $sub_menu = $this->mSubCategories->getSubCategory(false, 4);
        $data = [
            'menu' => $menu,
            'sub_menu' => $sub_menu
        ];
        return view('furniture/login', $data);
    }
}
