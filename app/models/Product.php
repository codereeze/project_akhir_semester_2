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

    public function productImage($column, $id)
    {
        $productImage = new ProductImage();
        return $this->joinWhere($productImage->table_name, 'id', 'produk_id', $column, $id);
    }

    public function comment($column, $id)
    {
        $comment = new Comment();
        return $this->joinWhere($comment->table_name, 'id', 'produk_id', $column, $id);
    }
}
