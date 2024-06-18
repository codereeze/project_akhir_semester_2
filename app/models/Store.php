<?php

namespace App\Models;

use Libraries\Model;

class Store extends Model
{
    public function __construct()
    {
        $this->table_name = 'stores';
    }

    public function store($column, $id)
    {
        $product = new Product();
        return $this->joinWhere($product->table_name, 'id', 'toko_id', $column, $id);
    }

    public function transaction($id, $status)
    {
        return $this->joinForTransaction('id', 'status', $id, $status);
    }
}
