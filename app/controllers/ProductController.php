<?php

namespace App\Controllers;

use Framework\Controller;

class ProductController extends Controller
{
    public function product()
    {
        return $this->render('product', [
            'title' => 'Produk Toko'
        ]);
    }

    public function checkout()
    {
        return $this->render('checkout', [
            'title' => 'Checkout'
        ]);
    }
}
