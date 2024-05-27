<?php

namespace App\Models;

use Framework\Model;

class Address extends Model
{
    public function __construct()
    {
        $this->table_name = 'addresses';
    }
}