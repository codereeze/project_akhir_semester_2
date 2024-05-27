<?php

namespace App\Models;

use Framework\Model;

class User extends Model
{
    public function __construct()
    {
        $this->table_name = 'users';
    }
}