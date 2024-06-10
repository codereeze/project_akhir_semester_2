<?php

namespace App\Models;

use Libraries\Model;

class Address extends Model
{
    public function __construct()
    {
        $this->table_name = 'addresses';
    }
}