<?php

namespace App\Controllers;

use App\Middleware\Authorization;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Follower;
use App\Models\Product;
use App\Models\Store;
use App\Models\Transaction;
use Libraries\Controller;
use Libraries\Request;
use Libraries\Response;

class SiteController extends Controller
{
    private Authorization $author;

    public function __construct()
    {
        $this->author = new Authorization();
    }

    public function home()
    {
        $products = new Product();
        $category = new Category();
        $transaction = new Transaction();

        return $this->render('home', [
            'title' => 'Beranda',
            'products' => $products->selectAll(),
            'categoryName' => fn ($id) => $category->find('id', $id)['nama_kategori'],
            'countTransaction' => fn ($id) => count($transaction->findAllById('produk_id', $id)),
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
            }
        ]);
    }

    public function store(Request $request)
    {
        $store = new Store();
        $product = new Product();
        $follower = new Follower();
        $category = new Category();
        $transaction = new Transaction();
        $toko_id = $request->getRouteParams()['id'];

        return $this->render('store', [
            'title' => 'Toko',
            'store' => $store->find('id', $toko_id),
            'countProduct' => count($product->findAllById('toko_id', $toko_id)),
            'countFollower' => count($follower->findAllById('toko_id', $toko_id)),
            'products' => $product->findAllById('toko_id', $toko_id),
            'categoryName' => fn ($id) => $category->find('id', $id)['nama_kategori'],
            'countTransaction' => fn ($id) => count($transaction->findAllById('produk_id', $id)),
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
            }
        ]);
    }

    public function search_result(Request $request)
    {
        $product = new Product();
        $category = new Category();
        $transaction = new Transaction();
        $getQueryParam = $request->getBody()['q'];

        if (!$getQueryParam) {
            Response::redirect('/');
        }

        return $this->render('search_result', [
            'title' => 'Hasil Pencarian',
            'query' => $getQueryParam,
            'products' => $product->search($getQueryParam),
            'categoryName' => fn ($id) => $category->find('id', $id)['nama_kategori'],
            'countTransaction' => fn ($id) => count($transaction->findAllById('produk_id', $id)),
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
            }
        ]);
    }

    public function register_seller()
    {
        $this->author->onlyUser();

        return $this->render('register_seller', [
            'title' => 'Daftar Menjadi Seller'
        ]);
    }
}
