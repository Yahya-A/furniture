<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelLogLogin extends Model
{
    protected $table = 'logs_login';
    protected $primaryKey = 'id';

    protected $allowedFields = ['email', 'login_date', 'ip_address', 'browser'];
    protected $useTimestamps = true;

    public function getLogsLogin()
    {
            return $this->findAll();
        // if ($email == false) {
        //     return $this->findAll();
        // }

        // return $this->where([$this->primaryKey => $id_categories])->first();
    }
}