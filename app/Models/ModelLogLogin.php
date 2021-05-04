<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelLogLogin extends Model
{
    protected $table = 'logs_login';
    protected $primaryKey = 'id';

    protected $allowedFields = ['email', 'login_date', 'ip_address', 'browser'];
    protected $useTimestamps = true;

    public function getLogsLogin($by = false)
    {
        if ($by == false) {
            return $this->findAll();
        }

        $this->like('created_at', $by.'%');
        return $this->findAll();
    }

    public function getBrowser($by = false){

        if ($by == false) {
            $this->select('browser');
            $this->selectCount('email');
            $this->groupBy('browser');
            return $this->findAll();
        }

        $this->select('browser');
        $this->selectCount('email');
        $this->groupBy('browser');
        $this->like('created_at', $by.'%');
        return $this->findAll();
    }
}