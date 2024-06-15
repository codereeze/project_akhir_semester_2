<?php

namespace App\Controllers;

use App\Middleware\Authorization;
use App\Models\Product;
use Libraries\Controller;
use Libraries\Request;

class ProductController extends Controller
{
    private Authorization $author;

    public function __construct()
    {
        $this->author = new Authorization();
    }

    public function product(Request $request)
    {
        $product = new Product();
        $id = (int)$request->getRouteParams()['id'];

        return $this->render('product', [
            'title' => 'Produk Toko',
            'product' => $product->find('id', $id),
            'store' => $product->store('id', $id)
        ]);
    }

    public function checkout(Request $request)
    {
        $this->author->userAndSeller();

        $product = new Product();
        $request = $request->getRouteParams();

        return $this->render('checkout', [
            'title' => 'Checkout',
            'product' => $product->find('id', $request['id'])
        ]);
    }
}
