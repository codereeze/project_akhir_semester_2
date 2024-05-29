<?php

namespace App\Controllers;

use App\Models\Store;
use Framework\Controller;

class StoreController extends Controller
{
    public function my_store()
    {
        $store = new Store();
        return $this->render('store/store', [
            'title' => 'Toko',
            'store' => $store->find('seller_id', $_SESSION['user_id']),
            'footer' => 'disable'
        ]);
    }

    public function management_product()
    {
        return $this->render('store/management_product', [
            'title' => 'Manajemen Produk',
            'footer' => 'disable'
        ]);
    }

    public function profile_store()
    {
        return $this->render('store/profile_store', [
            'title' => 'Profile Toko',
            'footer' => 'disable',
        ]);
    }

    public function edit_store()
    {
        return $this->render('store/edit_store', [
            'title' => 'Edit Toko',
            'footer' => 'disable'
        ]);
    }

    public function edit_product()
    {
        return $this->render('store/edit_product', [
            'title' => 'Edit Produk',
            'footer' => 'disable'
        ]);
    }

    public function add_product()
    {
        return $this->render('store/add_product', [
            'title' => 'Tambah Produk',
            'footer' => 'disable'
        ]);
    }
}
