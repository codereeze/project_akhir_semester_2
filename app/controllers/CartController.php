<?php

namespace App\Controllers;

use Framework\Controller;

class CartController extends Controller
{
    public function cart()
    {
        return $this->render('users/cart', [
            'title' => 'Keranjang Saya'
        ]);
    }
}
