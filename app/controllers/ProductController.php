<?php

namespace App\Controllers;

use App\Middleware\Authorization;
use Libraries\Controller;

class ProductController extends Controller
{
    private Authorization $author;

    public function __construct()
    {
        $this->author = new Authorization();
    }

    public function product()
    {
        return $this->render('product', [
            'title' => 'Produk Toko'
        ]);
    }

    public function checkout()
    {
        $this->author->userAndSeller();

        return $this->render('checkout', [
            'title' => 'Checkout'
        ]);
    }
}
