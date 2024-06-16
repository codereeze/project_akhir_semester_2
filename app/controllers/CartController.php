<?php

namespace App\Controllers;

use App\Middleware\Authorization;
use App\Models\Cart;
use App\Models\Product;
use App\Models\Store;
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
            'carts' => $cart->cart('id', $_SESSION['user_id'])
        ]);
    }
}
