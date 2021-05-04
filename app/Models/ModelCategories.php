<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelCategories extends Model
{
    protected $table = 'categories';
    protected $primaryKey = 'id_categories';

    protected $allowedFields = ['id_categories', 'parent_category'];
    protected $useTimestamps = true;

    public function getCategory($id_categories = false, $limit = '')
    {
        if ($id_categories == false) {
            return $this->findAll($limit);
        }

        return $this->where([$this->primaryKey => $id_categories])->first();
    }
}
