<?php

namespace App\Models;

use Framework\Model;

class Comment extends Model
{
    public function __construct()
    {
        $this->table_name = 'comments';
    }
}