<?php

namespace App\Models;

use Libraries\Model;

class Chat extends Model
{
    public function __construct()
    {
        $this->table_name = 'chats';
    }
}