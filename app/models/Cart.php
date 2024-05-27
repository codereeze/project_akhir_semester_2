<?php

namespace App\Models;

use Framework\Model;

class Cart extends Model
{
    public function __construct()
    {
        $this->table_name = 'carts';
    }
}