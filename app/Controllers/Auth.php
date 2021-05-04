<?php

namespace App\Controllers;

use App\Models\ModelCustomer;
use App\Models\ModelCustomerAccount;

class Auth extends BaseController
{
    protected $mCustomer;
    protected $mCustomerAccount;

    public function __construct()
    {
        $this->mCustomer = new ModelCustomer();
        $this->mCustomerAccount = new ModelCustomerAccount();
    }

    public function register()
    {
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
        $password = $this->request->getPost('password');
        $allow_login = $this->request->getPost('allow_login');
        $role = $this->request->getPost('role');
        $is_approve = $this->request->getPost('is_approve');

        // \dd($this->request->getVar());

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
                'customer_group' => $customer_group,
            ];
        } else {
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
                'customer_group' => $customer_group,
            ];
        }

        $this->mCustomer->save($customer);
        $last_id = $this->mCustomer->getInsertID();

        if (!empty($id_cus)) {
            $customeraccount = [
                'id_account'   => $last_id,
                'email'         => $email,
                'password'      => password_hash($password, PASSWORD_DEFAULT),
                'role'          => $role,
                'is_approved'   => $is_approve,
                'allow_login'   => $allow_login,
            ];
        } else {
            $customeraccount = [
                'id_account'   => $last_id,
                'email'         => $email,
                'password'      => password_hash($password, PASSWORD_DEFAULT),
                'role'          => $role,
                'is_approved'   => $is_approve,
                'allow_login'   => $allow_login,
            ];
        }
        $this->mCustomerAccount->saveAccount($customeraccount);
        // $coba->getCompiledSelect();
        return redirect()->to('/register');
    }
}
