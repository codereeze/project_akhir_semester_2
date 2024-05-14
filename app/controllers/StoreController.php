<?php

namespace App\Controllers;

use Framework\Controller;

class StoreController extends Controller
{
    public function store()
    {
        return $this->render('store/store', [
            'title' => 'Toko'
        ]);
    }
}
