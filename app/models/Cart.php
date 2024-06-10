<?php

namespace App\Models;

use Libraries\Model;

class Cart extends Model
{
    public function __construct()
    {
        $this->table_name = 'carts';
    }
}