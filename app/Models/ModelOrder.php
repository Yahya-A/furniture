<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelOrder extends Model
{
    protected $table = 'orders';
    protected $primaryKey = 'id_order';

    protected $allowedFields = ['id_order', 'no_order', 'id_prod', 'note', 'width', 'depth', 'height', 'weight', 'qty', 'total_price', 'order_type', 'date_order', 'date_accepted', 'status', 'id_customer'];
    protected $useTimestamps = true;

    public function getOrder($id_order = false)
    {
        $this->select('orders.*');
        $this->select('product.*');
        $this->select('customer.company_name');
        $this->join('product', 'product.id_prod = orders.id_prod');
        $this->join('customer', 'customer.id_customer = orders.id_customer');
        if ($id_order == false) {
            return $this->findAll();
        }

        return $this->where([$this->primaryKey => $id_order])->first();
    }

    public function getLastID(){
        $this->orderBy('no_order', 'DESC');
        return $this->findAll(1);
    }

}
