<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelSubCategories extends Model
{
    protected $table = 'sub_categories';
    protected $primaryKey = 'id';

    protected $allowedFields = ['id_categories', 'sub_category'];
    protected $useTimestamps = true;

    public function getSubCategory($id_categories = false, $limit = '')
    {
        if ($id_categories == false) {
            return $this->findAll($limit);
        }

        return $this->where([$this->primaryKey => $id_categories])->first();
    }
}
