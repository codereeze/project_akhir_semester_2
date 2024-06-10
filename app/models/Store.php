<?php

namespace App\Models;

use Libraries\Model;

class Store extends Model
{
    public function __construct()
    {
        $this->table_name = 'stores';
    }
}