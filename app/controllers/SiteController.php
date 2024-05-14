<?php

namespace App\Controllers;

use Framework\Controller;

class SiteController extends Controller
{
    public function home()
    {
        return $this->render('home', [
            'title' => 'Beranda'
        ]);
    }

    public function search_result()
    {
        return $this->render('search_result', [
            'title' => 'Hasil Pencarian'
        ]);
    }
}
