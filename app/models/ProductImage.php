<?php

namespace App\Models;

use Framework\Model;

class ProductImage extends Model
{
    public function __construct()
    {
        $this->table_name = 'productimages';
    }
}