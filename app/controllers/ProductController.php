<?php

namespace App\Controllers;

use App\Middleware\Authorization;
use App\Models\Cart;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Follower;
use App\Models\Product;
use App\Models\Store;
use App\Models\User;
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
        $comment = new Comment();

        $id = (int)$request->getRouteParams()['id'];
        $store_id = $product->find('id', $id)['toko_id'];

        return $this->render('product', [
            'title' => 'Produk Toko',
            'product' => $product->find('id', $id),
            'category' => $category->category('id', $id)[0],
            'store' => $store->store('id', $id)[0],
            'comments' => $product->comment('produk_id', $id),
            'isFollow' => $follower->find('user_id', $_SESSION['user_id']),
            'productTransaction' => count($product->findAllById('id', $id)),
            'productComment' => count($comment->findAllById('produk_id', $id)),
            'followers' => count($follower->findAllById('toko_id', $store_id)),
            'profile' => function ($id) {
                $user = new User();
                return $user->find('id', $id)['foto_profile'];
            },
            'countRating' => function ($id) {
                $comment = new Comment();
                $ratings = [];

                $comments = $comment->findAllById('produk_id', $id);

                if (empty($comments)) {
                    return 0;
                }

                foreach ($comments as $item) {
                    array_push($ratings, (int)$item['rating']);
                }

                if (count($ratings) > 0) {
                    $result = array_sum($ratings) / count($ratings);
                    return round($result, 1);
                } else {
                    return 0;
                }
            },
        ]);
    }

    public function postHandler(Request $request)
    {
        $request = $request->getFormData();
        $follower = new Follower();
        $cart = new Cart();

        if ($request['form'] === 'follow') {
            $sanitized = [
                'toko_id' => htmlspecialchars(trim((int)$request['toko_id'])),
                'user_id' => $_SESSION['user_id']
            ];

            $follower->insert($sanitized);
            Response::redirect("/produk/{$request['produk_id']}");
        } else if ($request['form'] === 'unfollow') {
            $follower->delete('user_id', $_SESSION['user_id']);
            Response::redirect("/produk/{$request['produk_id']}");
        } else if ($request['form'] == 'keranjang') {
            $sanitized = [
                'qty' => htmlspecialchars(trim($request['qty'])),
                'size' => htmlspecialchars(trim($request['size'])),
                'produk_id' => htmlspecialchars(trim($request['produk_id'])),
                'user_id' => $_SESSION['user_id']
            ];
            $cart->insert($sanitized);
            Response::redirect('/keranjang')->withSuccess('Berhasil menambahkan produk ke keranjang');
        }
    }
}
