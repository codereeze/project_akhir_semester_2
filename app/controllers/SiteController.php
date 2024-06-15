<?php

namespace App\Controllers;

use App\Models\Product;
use Libraries\Controller;

class SiteController extends Controller
{
    public function home()
    {
        $products = new Product();
        return $this->render('home', [
            'title' => 'Beranda',
            'recomended_products' => $products->selectAll(),
        ]);
    }

    public function search_result()
    {
        return $this->render('search_result', [
            'title' => 'Hasil Pencarian'
        ]);
    }
}
