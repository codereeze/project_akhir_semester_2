<?php

namespace App\Controllers;

use App\Middleware\Authorization;
use App\Models\Cart;
use App\Models\Product;
use App\Models\Store;
use App\Models\User;
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
        $carts = $cart->cart('id', $_SESSION['user_id']);
        $getCartWithIds = $cart->findAllById('user_id', $_SESSION['user_id']);
        $cartIdLists = [];
        foreach ($getCartWithIds as $cartIds) {
            array_push($cartIdLists, $cartIds['id']);
        }

        return $this->render('users/cart', [
            'title' => 'Keranjang Saya',
            'carts' => $carts,
        ]);
    }
}
