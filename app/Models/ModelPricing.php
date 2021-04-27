<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelPricing extends Model
{
    protected $table = 'pricing';
    protected $primaryKey = 'id_price';

    protected $allowedFields = ['id_price', 'customer_group', 'description', 'rate'];
    protected $useTimestamps = true;

    public function getPrice($id_price = false)
    {
        if ($id_price == false) {
            return $this->findAll();
        }

        return $this->where([$this->primaryKey => $id_price])->first();
    }
}
