<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelProduct extends Model
{
    protected $table = 'product';
    protected $primaryKey = 'id_prod';

    protected $allowedFields = ['item_code', 'name', 'id_categories', 'measurmnet', 'width', 'depth', 'height', 'spesification', 'supplier', 'picture', 'price', 'stock'];
    protected $useTimestamps = true;

    public function getProduct($id_prod = false)
    {
        if ($id_prod == false) {
            return $this->findAll();
        }

        return $this->where([$this->primaryKey => $id_prod])->first();
    }
}
