<?php

namespace App\Models;

use Libraries\Model;
use App\Models\Store;

class Product extends Model
{
    public function __construct()
    {
        $this->table_name = 'products';
        return $this->table_name;
    }

    public function store($column, $id)
    {
        $store = new Store();
        return $this->joinWhere($store->table_name, 'id', 'toko_id', $column, $id);
    }
}
