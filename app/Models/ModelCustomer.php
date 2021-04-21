<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelCustomer extends Model
{
    protected $table = 'customer';
    protected $primaryKey = 'id_customer';

    protected $allowedFields = ['id_customer', 'fname', 'lname', 'position', 'company_name', 'email', 'password', 'st_address', 'city', 'state', 'country', 'post_code', 'phone', 'website', 'extension', 'fax', 'customer_group', 'allow_login'];

    protected $useTimestamps = true;

    public function getCustomer($id_cus = false)
    {
        if ($id_cus == false) {
            return $this->findAll();
        }

        return $this->where([$this->primaryKey => $id_cus])->first();
    }
}
