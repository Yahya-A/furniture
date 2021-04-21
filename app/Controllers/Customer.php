<?php

namespace App\Controllers;

use App\Models\ModelCustomer;

class Customer extends BaseController
{

    protected $mCustomer;

    public function __construct()
    {
        $this->mCustomer = new ModelCustomer();
    }

	public function new_customer()
	{
        $active = \menu('','active','','','','');

        $data = [
            'active_menu'   => $active
        ];
		return view('furniture-admin/master/customer/add_customer', $data);
	}

	public function list_customer()
	{
        $customer = $this->mCustomer->getCustomer();
        $active = \menu('','','active','','','');

        $data   = [
            'customer'      => $customer,
            'active_menu'   => $active
        ];

		return view('furniture-admin/master/customer/list_customer', $data);
	}

	public function update_customer()
	{
        $id_cus = \base64_decode($this->request->getGet('id'));
        $active = \menu('','','active','','','');

        $customer = $this->mCustomer->getCustomer($id_cus);
        $data   = [
            'customer' => $customer,
            'active_menu'   => $active
        ];
        // \dd($data);
		return view('furniture-admin/master/customer/update_customer', $data);
	}

    public function delete_customer(){
        $id_customer = base64_decode($this->request->getGet('id'));

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
        $email = $this->request->getPost('email');
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
        $allow_login = $this->request->getPost('allow_login');

        if (!empty($id_cus)) {
                $customer = [
                    'id_customer'   => $id_cus,
                    'fname'         => $fname,
                    'lname'         => $lname,
                    'company_name'  => $company_name,
                    'position'      => $position,
                    'email'         => $email,
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
                    'allow_login'   => $allow_login,
                ];
        }else{
                $customer = [
                    'fname'         => $fname,
                    'lname'         => $lname,
                    'company_name'  => $company_name,
                    'position'      => $position,
                    'email'         => $email,
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
                    'allow_login'   => $allow_login,
                ];
        }

        $this->mCustomer->save($customer);

        return redirect()->to('list_customer');
    }
}