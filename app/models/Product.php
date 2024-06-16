<?php

namespace App\Models;

use Libraries\Model;

class Product extends Model
{
    public function __construct()
    {
        $this->table_name = 'products';
    }

    public function productImage($column, $id)
    {
        $productImage = new ProductImage();
        return $this->joinWhere($productImage->table_name, 'id', 'produk_id', $column, $id);
    }

    public function comment($column, $id)
    {
        $product = new Comment();
        return $this->joinWhere($product->table_name, 'id', 'produk_id', $column, $id);
    }

    public function cart($column, $id)
    {
        $product = new Product();
        return $this->joinWhere($product->table_name, 'id', 'produk_id', $column, $id);
    }
}
