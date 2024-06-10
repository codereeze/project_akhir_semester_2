<?php

namespace App\Models;

use Libraries\Model;

class Follower extends Model
{
    public function __construct()
    {
        $this->table_name = 'followers';
    }
}