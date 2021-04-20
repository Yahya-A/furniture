<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelCategories extends Model
{
    protected $table = 'categories';
    protected $primaryKey = 'id_categories';

    protected $allowedFields = ['id_categories', 'category_name'];
    protected $useTimestamps = true;

    public function getCategory($id_categories = false)
    {
        if ($id_categories == false) {
            return $this->findAll();
        }

        return $this->where([$this->primaryKey => $id_categories])->first();
    }
}
