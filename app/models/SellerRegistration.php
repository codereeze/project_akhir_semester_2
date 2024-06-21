<?php

namespace App\Models;

use Libraries\Model;

class SellerRegistration extends Model
{
    public function __construct()
    {
        $this->table_name = 'registration_sellers';
    }
}