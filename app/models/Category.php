<?php

namespace App\Models;

use Framework\Model;

class Category extends Model
{
    public function __construct()
    {
        $this->table_name = 'categories';
    }
}