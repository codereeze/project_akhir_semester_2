<?php

namespace App\Models;

use Libraries\Model;

class Category extends Model
{
    public function __construct()
    {
        $this->table_name = 'categories';
    }

    public function category($column, $id)
    {
        $product = new Product();
        return $this->joinWhere($product->table_name, 'id', 'kategori_id', $column, $id);
    }
}
