<?php

namespace App\Models;

use Libraries\Model;

class Transaction extends Model
{
    public function __construct()
    {
        $this->table_name = 'transactions';
    }

    public function transaction($id, $status)
    {
        return $this->joinForTransaction('id', 'status', $id, $status);
    }
}
