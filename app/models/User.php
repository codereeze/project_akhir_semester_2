<?php

namespace App\Models;

use Libraries\Model;

class User extends Model
{
    public function __construct()
    {
        $this->table_name = 'users';
    }
}
