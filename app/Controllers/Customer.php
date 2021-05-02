<?php

namespace App\Controllers;

use App\Models\ModelCustomer;
use App\Models\ModelCustomerAccount;
use App\Models\ModelPricing;

class Customer extends BaseController
{

    protected $mCustomer;
    protected $mCustomerAccount;
    protected $mPricing;

    public function __construct()
    {
        $this->mCustomer = new ModelCustomer();
        $this->mCustomerAccount = new ModelCustomerAccount();
        $this->mPricing= new ModelPricing();
    }

    public function index(){
        $customer = $this->mCustomer->getCustomer();
        $active = \menu('customer_list');

        $data   = [
            'customer'      => $customer,
            'active_menu'   => $active
        ];

		return view('furniture-admin/master/customer/list_customer', $data);
    }

    // public function test(){
    //     echo $_SERVER['HTTP_USER_AGENT'];
    // }

	public function new_customer()
	{
        $active = \menu('customer_new');
        $browser = $this->_get_browser($_SERVER['HTTP_USER_AGENT']);
        $price = $this->mPricing->getPrice();
        $data = [
            'active_menu'   => $active,
            'price'   => $price,
            'browser_name'   => $browser,
        ];
		return view('furniture-admin/master/customer/add_customer', $data);
	}

	public function list_customer()
	{
        $customer = $this->mCustomer->getCustomer();
        $active = \menu('customer_list');

        $data   = [
            'customer'      => $customer,
            'active_menu'   => $active
        ];

		return view('furniture-admin/master/customer/list_customer', $data);
	}

	public function update_customer()
	{
        $id_cus = \base64_decode($this->request->getGet('id'));
        $active = \menu('customer_list');
        $price = $this->mPricing->getPrice();
        $customer = $this->mCustomer->getCustomer($id_cus);

        $data   = [
            'customer' => $customer,
            'active_menu'   => $active,
            'price'   => $price
        ];
		return view('furniture-admin/master/customer/update_customer', $data);
	}

    public function delete_customer(){
        $id_customer = base64_decode($this->request->getGet('id'));

        $this->mCustomerAccount->delete($id_customer);
        $this->mCustomer->delete($id_customer);


        return redirect()->to('list_customer');
    }

    public function save_customer()
    {
        $id_cus = $this->request->getPost('id_customer');
        
        $company_name = $this->request->getPost('company_name');
        $fname = $this->request->getPost('fname');
        $lname = $this->request->getPost('lname');
        $position = $this->request->getPost('position');
        $st_address = $this->request->getPost('st_address');
        $city = $this->request->getPost('city');
        $state = $this->request->getPost('state');
        $country = $this->request->getPost('country');
        $post_code = $this->request->getPost('post_code');
        $phone = $this->request->getPost('phone');
        $website = $this->request->getPost('website');
        $extension = $this->request->getPost('extension');
        $fax = $this->request->getPost('fax');
        $customer_group = $this->request->getPost('customer_group');

        $email = $this->request->getPost('email');
        $allow_login = $this->request->getPost('allow_login');
        $role = $this->request->getPost('role');
        $is_approve = $this->request->getPost('is_approve');


        if (!empty($id_cus)) {
                $customer = [
                    'id_customer'   => $id_cus,
                    'fname'         => $fname,
                    'lname'         => $lname,
                    'company_name'  => $company_name,
                    'position'      => $position,
                    'st_address'    => $st_address,
                    'city'          => $city,
                    'state'         => $state,
                    'country'       => $country,
                    'post_code'     => $post_code,
                    'phone'         => $phone,
                    'website'       => $website,
                    'extension'     => $extension,
                    'fax'           => $fax,
                    'customer_group'=> $customer_group,
                ];
        }else{
                $customer = [
                    'fname'         => $fname,
                    'lname'         => $lname,
                    'company_name'  => $company_name,
                    'position'      => $position,
                    'st_address'    => $st_address,
                    'city'          => $city,
                    'state'         => $state,
                    'country'       => $country,
                    'post_code'     => $post_code,
                    'phone'         => $phone,
                    'website'       => $website,
                    'extension'     => $extension,
                    'fax'           => $fax,
                    'customer_group'=> $customer_group,
                ];
        }

        $this->mCustomer->save($customer);
        $last_id = $this->mCustomer->getInsertID();

        if (!empty($id_cus)) {
                $customeraccount = [
                    'id_account'   => $last_id,
                    'email'         => $email,
                    'password'      => \random_string('alnum', 8),
                    'role'          => $role,
                    'is_approved'   => $is_approve,
                    'allow_login'   => $allow_login,
                ];
        }else{
                $customeraccount = [
                    'id_account'   => $last_id,
                    'email'         => $email,
                    'password'      => \random_string('alnum', 8),
                    'role'          => $role,
                    'is_approved'   => $is_approve,
                    'allow_login'   => $allow_login,
                ];
        }
        $this->mCustomerAccount->saveAccount($customeraccount);
        // $coba->getCompiledSelect();
        return redirect()->to('list_customer');
    }

    public function findCustomer(){
        $key = $this->request->getPost('key');
        $customer = $this->mCustomer->getCustomerBy($key, 'name');
        $data = [
            'customer'   => $customer,
        ];

        return $this->response->setJSON($data);
    }

    public function getCustomer(){
        $key = $this->request->getPost('key');
        $customer = $this->mCustomer->getCustomer($key);
        $data = [
            'customer'   => $customer,
        ];

        return $this->response->setJSON($data);
    }

    private function _get_browser($user_agent){
        $browser_name;
        if (strpos($user_agent, 'Opera') || strpos($user_agent, 'OPR/')) {
            $browser_name = 'Opera';
        }elseif (strpos($user_agent, 'Edge')) {
            $browser_name = 'Edge';
        }elseif (strpos($user_agent, 'Chrome')) {
            $browser_name = 'Chrome';
        }elseif (strpos($user_agent, 'Safari')) {
            $browser_name = 'Safari';
        }elseif (strpos($user_agent, 'Firefox')) {
            $browser_name = 'Firefox';
        }elseif (strpos($user_agent, 'MSIE') || strpos($user_agent, 'Trident/7')) {
            $browser_name = 'Internet Explorer';
        }else{
            $browser_name = 'Other';
        }

        return $browser_name;
    }
}