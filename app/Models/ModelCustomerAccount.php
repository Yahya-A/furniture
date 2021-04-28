<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelCustomerAccount extends Model
{
    protected $table = 'customer_account';
    protected $primaryKey = 'id_account';

    protected $allowedFields = ['id_account', 'email', 'password', 'is_approve', 'role',  'allow_login'];

    protected $useTimestamps = true;

    public function getCustomerAccount($id_cus = false)
    {
        if ($id_cus == false) {
            return $this->findAll();
        }

        return $this->where('id_customer', $id_cus)->first();
    }

    public function saveAccount($data){
        $this->insert($data);
    }
}
