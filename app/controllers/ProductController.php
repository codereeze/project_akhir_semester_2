<?php

namespace App\Controllers;

use App\Middleware\Authorization;
use App\Models\Address;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Follower;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\Store;
use Libraries\Controller;
use Libraries\Request;
use Libraries\Response;

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
        $follower = new Follower();

        $id = (int)$request->getRouteParams()['id'];

        return $this->render('product', [
            'title' => 'Produk Toko',
            'product' => $product->find('id', $id),
            'category' => $category->category('id', $id)[0],
            'store' => $store->store('id', $id)[0],
            'productImages' => $product->productImage('id', $id),
            'comments' => $product->comment('produk_id', $id),
            'isFollow' => $follower->find('user_id', $_SESSION['user_id'])
        ]);
    }

    public function postHandler(Request $request)
    {
        $request = $request->getFormData();
        $follower = new Follower();

        if($request['form'] === 'follow'){
            $sanitized = [
                'toko_id' => htmlspecialchars(trim((int)$request['toko_id'])),
                'user_id' => $_SESSION['user_id']
            ];

            $follower->insert($sanitized);
            Response::redirect("/produk/{$request['produk_id']}");
        }else if($request['form'] === 'unfollow'){
            $follower->delete($_SESSION['user_id']);
            Response::redirect("/produk/{$request['produk_id']}");
        }
    }
}
