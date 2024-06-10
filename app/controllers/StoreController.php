<?php

namespace App\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Store;
use Libraries\Controller;
use Libraries\Request;
use Libraries\Response;

class StoreController extends Controller
{
    public function my_store()
    {
        $store = new Store();
        $product = new Product();
        $result = $store->find('seller_id', $_SESSION['user_id']);
        return $this->render('store/home', [
            'title' => 'Toko',
            'store' => $result,
            'products' => $product->findAllById('toko_id', $result['id']),
            'footer' => 'disable'
        ]);
    }

    public function management_product()
    {
        $product = new Product();
        $store = new Store();
        $store = $store->find('seller_id', $_SESSION['user_id']);
        return $this->render('store/management_product', [
            'title' => 'Manajemen Produk',
            'products' => $product->findAllById('toko_id', $store['id']),
            'footer' => 'disable'
        ]);
    }

    public function profile_store()
    {
        $store = new Store();
        return $this->render('store/profile_store', [
            'title' => 'Profile Toko',
            'store' => $store->find('seller_id', $_SESSION['user_id']),
            'footer' => 'disable',
        ]);
    }

    public function edit_store()
    {
        $store = new Store();
        return $this->render('store/edit_store', [
            'title' => 'Edit Toko',
            'store' => $store->find('seller_id', $_SESSION['user_id']),
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
        $category = new Category();
        $store = new Store();
        return $this->render('store/add_product', [
            'title' => 'Tambah Produk',
            'categories' => $category->selectAll(),
            'store' => $store->find('seller_id', $_SESSION['user_id']),
            'footer' => 'disable'
        ]);
    }
    public function detail_product()
    {
        return $this->render('store/detail_product', [
            'title' => 'Tambah Produk',
            'footer' => 'disable'
        ]);
    }

    public function addProductHandler(Request $request)
    {
        $request = $request->getFormData();
        $sanitized = [
            'nama_produk' => htmlspecialchars(trim($request['nama_produk'])),
            'harga' => htmlspecialchars(trim($request['harga'])),
            'merk' => htmlspecialchars(trim($request['merk'])),
            'toko_id' => htmlspecialchars(trim($request['toko_id'])),
            'kategori_id' => htmlspecialchars(trim($request['kategori_id'])),
            'stock' => htmlspecialchars(trim($request['stock'])),
            'size_s' => htmlspecialchars(trim($request['size_s'] ?? 'No')),
            'size_m' => htmlspecialchars(trim($request['size_m'] ?? 'No')),
            'size_l' => htmlspecialchars(trim($request['size_l'] ?? 'No')),
            'size_xl' => htmlspecialchars(trim($request['size_xl'] ?? 'No')),
            'size_xxl' => htmlspecialchars(trim($request['size_xxl'] ?? 'No')),
            'deskripsi' => htmlspecialchars(trim($request['deskripsi'])),

        ];

        $product = new Product();
        $product->insert($sanitized);
        Response::redirect('/manajemen_produk');
    }

    public function deleteProductHandler(Request $request)
    {
        $request = $request->getFormData();
        $product = new Product();
        $product->delete($request['product_id']);
        Response::redirect('/manajemen_produk');
    }

    public function editStoreHandler(Request $request)
    {
        $request = $request->getFormData();
        $store = new Store();
        if ($request['data_1']) {
            $sanitized = [
                'nama_toko' => htmlspecialchars(trim($request['nama_toko'])),
                'copywriting' => htmlspecialchars(trim($request['copywriting'])),
                'jam_buka' => htmlspecialchars(trim($request['jam_buka'])),
                'jam_tutup' => htmlspecialchars(trim($request['jam_tutup'])),
                'deskripsi' => htmlspecialchars(trim($request['deskripsi'])),
            ];
            $store->update($sanitized, $_SESSION['user_id'], 'seller_id');
            Response::redirect('/edit_toko');
        } elseif ($request['data_2']) {
            $sanitized = [
                'nama_jalan' => htmlspecialchars(trim($request['nama_jalan'])),
                'rt_rw' => htmlspecialchars(trim($request['rt_rw'])),
                'kelurahan' => htmlspecialchars(trim($request['kelurahan'])),
                'kecamatan' => htmlspecialchars(trim($request['kecamatan'])),
                'kab_kot' => htmlspecialchars(trim($request['kab_kot'])),
                'provinsi' => htmlspecialchars(trim($request['provinsi'])),
                'kode_pos' => htmlspecialchars(trim($request['kode_pos'])),
            ];
            $store->update($sanitized, $_SESSION['user_id'], 'seller_id');
            Response::redirect('/edit_toko');
        }
    }
}
