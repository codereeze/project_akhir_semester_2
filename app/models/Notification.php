<?php

namespace App\Models;

use Libraries\Model;

class Notification extends Model
{
    public function __construct()
    {
        $this->table_name = 'notifications';
    }

    public function notification($column, $id)
    {
        return $this->joinForNotification($column, $id);
    }
}
