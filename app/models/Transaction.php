<?php

namespace App\Models;

use Framework\Model;

class Transaction extends Model
{
    public function __construct()
    {
        $this->table_name = 'transactions';
    }
}