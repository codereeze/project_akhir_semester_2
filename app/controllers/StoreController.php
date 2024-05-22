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

    public function management_product()
    {
        return $this->render('store/management_product', [
            'title' => 'Manajemen Produk'
        ]);
    }

    public function profile_store()
    {
        return $this->render('store/profile_store', [
            'title' => 'Profile Toko'
        ]);
    }

    public function edit_store()
    {
        return $this->render('store/edit_store', [
            'title' => 'Edit Toko'
        ]);
    }

    public function edit_product()
    {
        return $this->render('store/edit_product', [
            'title' => 'Edit Produk'
        ]);
    }

    public function add_product()
    {
        return $this->render('store/add_product', [
            'title' => 'Tambah Produk'
        ]);
    }
}
