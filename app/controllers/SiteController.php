<?php

namespace App\Controllers;

use App\Middleware\Authorization;
use App\Models\Product;
use Libraries\Controller;

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
        return $this->render('home', [
            'title' => 'Beranda',
            'recomended_products' => $products->selectAll(),
        ]);
    }

    public function store()
    {
        return $this->render('store', [
            'title' => 'Toko',
        ]);
    }

    public function search_result()
    {
        return $this->render('search_result', [
            'title' => 'Hasil Pencarian'
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
