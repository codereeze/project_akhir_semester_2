<?php

namespace App\Models;

use Framework\Model;

class Product extends Model
{
    public function __construct()
    {
        $this->table_name = 'products';
    }
}