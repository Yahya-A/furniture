<?php

namespace App\Controllers;

use App\Models\ModelCustomer;
use App\Models\ModelCustomerAccount;
use App\Models\ModelLogLogin;

class Login extends BaseController
{
    protected $mCustomer;
    protected $mCustomerAccount;
    protected $mLogLogin;

    public function __construct()
    {
        $this->mCustomer = new ModelCustomer();
        $this->mCustomerAccount = new ModelCustomerAccount();
        $this->mLogLogin = new ModelLogLogin();
    }

    public function index()
    {
        return view('furniture-admin/login');
    }

    public function auth()
    {
        $session = session();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        $data = $this->mCustomerAccount->checkAccount($email);
        if ($data) {
            $pass = $data['password'];
            $verify_pass = password_verify($password, $pass);
            if ($verify_pass) {
                $ses_data = [
                    'name'          => $data['fname'] . ' ' . $data['lname'],
                    'account_id'    => $data['id_account'],
                    'allow_login'         => $data['allow_login'],
                    'is_approve'         => $data['is_approve'],
                    'role'         => $data['role'],
                    'logged_in'     => TRUE
                ];
                $session->set($ses_data);
                $logs = [
                    'email' => $data['email'],
                    'login_date' => strtotime(date('Y-m-d h:i:s')),
                    'ip_address' => $_SERVER['REMOTE_ADDR'],
                    'browser' => \get_browser_name($_SERVER['HTTP_USER_AGENT']),
                ];
                $this->mLogLogin->save($logs);
                return redirect()->to('/furniture-admin');
            } else {
                $session->setFlashdata('msg', 'Password Salah');
                return redirect()->to('/furniture-admin/login');
            }
        } else {
            $session->setFlashdata('msg', 'Akun Tidak Ditemukan');
            return redirect()->to('/furniture-admin/login');
        }
    }

    // public function test_ses(){
    //     \dd(session()->get());
    // }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/');
    }

    // private function _get_browser($user_agent){
    //     $browser_name;
    //     if (strpos($user_agent, 'Opera') || strpos($user_agent, 'OPR/')) {
    //         $browser_name = 'Opera';
    //     }elseif (strpos($user_agent, 'Edge')) {
    //         $browser_name = 'Edge';
    //     }elseif (strpos($user_agent, 'Chrome')) {
    //         $browser_name = 'Chrome';
    //     }elseif (strpos($user_agent, 'Safari')) {
    //         $browser_name = 'Safari';
    //     }elseif (strpos($user_agent, 'Firefox')) {
    //         $browser_name = 'Firefox';
    //     }elseif (strpos($user_agent, 'MSIE') || strpos($user_agent, 'Trident/7')) {
    //         $browser_name = 'Internet Explorer';
    //     }else{
    //         $browser_name = 'Other';
    //     }

    //     return $browser_name;
    // }
}
