<?php

namespace App\Models;

use Libraries\Model;

class Product extends Model
{
    public function __construct()
    {
        $this->table_name = 'products';
    }
}