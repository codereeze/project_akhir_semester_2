<?php

namespace App\Models;

use Libraries\Model;

class Cart extends Model
{
    public function __construct()
    {
        $this->table_name = 'carts';
    }

    public function cart($column, $id)
    {
        return $this->joinForCart($column, $id);
    }

    public function cart_id($column, $id)
    {
        $cart = new Cart();
        return $this->joinWhere($cart->table_name, 'id', 'user_id', $column, $id);
    }

}
