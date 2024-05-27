<?php

namespace App\Models;

use Framework\Model;

class Store extends Model
{
    public function __construct()
    {
        $this->table_name = 'stores';
    }
}