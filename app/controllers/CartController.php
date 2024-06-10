<?php

namespace App\Controllers;

use App\Models\Cart;
use Framework\Controller;

class CartController extends Controller
{
    public function cart()
    {
        $cart = new Cart();
        return $this->render('users/cart', [
            'title' => 'Keranjang Saya',
            'carts' => $cart->findAllById('user_id', $_SESSION['id'])
        ]);
    }
}
