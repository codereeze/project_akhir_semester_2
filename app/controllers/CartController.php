<?php

namespace App\Controllers;

use App\Middleware\Authorization;
use App\Models\Cart;
use Libraries\Controller;

class CartController extends Controller
{
    private Authorization $author;

    public function __construct()
    {
        $this->author = new Authorization();
    }

    public function cart()
    {
        $this->author->userAndSeller();

        $cart = new Cart();
        return $this->render('users/cart', [
            'title' => 'Keranjang Saya',
            'carts' => $cart->findAllById('user_id', $_SESSION['user_id'])
        ]);
    }
}
