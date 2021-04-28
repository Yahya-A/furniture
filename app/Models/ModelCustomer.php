<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelCustomer extends Model
{
    protected $table = 'customer';
    protected $primaryKey = 'id_customer';

    protected $allowedFields = ['id_customer', 'fname', 'lname', 'position', 'company_name', 'st_address', 'city', 'state', 'country', 'post_code', 'phone', 'website', 'extension', 'fax', 'customer_group',];

    protected $useTimestamps = true;

    public function getCustomer($id_cus = false)
    {
        $this->join('customer_account', 'customer.id_customer = customer_account.id_account');
        $this->join('pricing', 'customer.customer_group = pricing.id_price');
        if ($id_cus == false) {
            // $this->join('customer_account', 'customer.id_customer = customer_account.id_customer');
            // $this->select('customer.*, customer_account.allow_login');
            return $this->findAll();
            // return $this->getCompiledSelect();
        }
        return $this->where('customer.id_customer', $id_cus)->first();
    }
}
