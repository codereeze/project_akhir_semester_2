<?php

namespace App\Controllers;

use App\Middleware\Authorization;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\Store;
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
        $category = new Category();
        $store = new Store();

        $id = (int)$request->getRouteParams()['id'];

        return $this->render('product', [
            'title' => 'Produk Toko',
            'product' => $product->find('id', $id),
            'category' => $category->category('id', $id),
            'store' => $store->store('id', $id),
            'productImages' => $product->productImage('id', $id),
            'comments' => $product->comment('id', $id)
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
