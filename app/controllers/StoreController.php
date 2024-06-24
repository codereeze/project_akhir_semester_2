<?php

namespace App\Controllers;

use App\Middleware\Authorization;
use App\Models\Address;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Follower;
use App\Models\Product;
use App\Models\Store;
use App\Models\Transaction;
use App\Models\User;
use Libraries\Controller;
use Libraries\FileManagement;
use Libraries\Request;
use Libraries\Response;
use Picqer\Barcode\BarcodeGeneratorHTML;

class StoreController extends Controller
{
    private Authorization $author;

    public function __construct()
    {
        $this->author = new Authorization();
    }

    public function my_store()
    {
        $this->author->onlySeller();

        $store = new Store();
        $product = new Product();
        $followers = new Follower();
        $category = new Category();
        $transaction = new Transaction();
        $store = $store->find('seller_id', $_SESSION['user_id']);

        return $this->render('store/home', [
            'title' => 'Toko',
            'store' => $store,
            'followers' => count($followers->findAllById('toko_id', $store['id'])),
            'products' => $product->findAllById('toko_id', $store['id']),
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
            },
            'footer' => 'disable'
        ]);
    }

    public function management_product()
    {
        $this->author->onlySeller();

        $product = new Product();
        $store = new Store();
        $followers = new Follower();
        $store = $store->find('seller_id', $_SESSION['user_id']);

        return $this->render('store/management_product', [
            'title' => 'Manajemen Produk',
            'products' => $product->findAllById('toko_id', $store['id']),
            'followers' => count($followers->findAllById('toko_id', $store['id'])),
            'store' => $store,
            'footer' => 'disable'
        ]);
    }

    public function edit_store()
    {
        $this->author->onlySeller();

        $followers = new Follower();
        $store = new Store();
        $store = $store->find('seller_id', $_SESSION['user_id']);

        return $this->render('store/edit_store', [
            'title' => 'Edit Toko',
            'followers' => count($followers->findAllById('toko_id', $store['id'])),
            'store' => $store,
            'footer' => 'disable'
        ]);
    }

    public function edit_product(Request $request)
    {
        $this->author->onlySeller();

        $store = new Store();
        $category = new Category();
        $product = new Product();
        $followers = new Follower();

        $id = $request->getRouteParams()['id'];
        $categoryID = $product->find('id', $id)['kategori_id'];
        $store = $store->find('seller_id', $_SESSION['user_id']);

        return $this->render('store/edit_product', [
            'title' => 'Edit Produk',
            'store' => $store,
            'product' => $product->find('id', $id),
            'categories' => $category->selectAll(),
            'category' => $category->find('id', $categoryID),
            'followers' => count($followers->findAllById('toko_id', $store['id'])),
            'footer' => 'disable'
        ]);
    }

    public function add_product()
    {
        $this->author->onlySeller();

        $category = new Category();
        $store = new Store();
        $followers = new Follower();

        $store = $store->find('seller_id', $_SESSION['user_id']);

        return $this->render('store/add_product', [
            'title' => 'Tambah Produk',
            'categories' => $category->selectAll(),
            'followers' => count($followers->findAllById('toko_id', $store['id'])),
            'store' => $store,
            'footer' => 'disable'
        ]);
    }
    public function detail_product(Request $request)
    {
        $this->author->onlySeller();

        $store = new Store();
        $product = new Product();
        $category = new Category();
        $followers = new Follower();

        $id = $request->getRouteParams()['id'];
        $categoryID = $product->find('id', $id)['kategori_id'];
        $store = $store->find('seller_id', $_SESSION['user_id']);

        return $this->render('store/detail_product', [
            'title' => 'Tambah Produk',
            'store' => $store,
            'product' => $product->find('id', $id),
            'category' => $category->find('id', $categoryID),
            'followers' => count($followers->findAllById('toko_id', $store['id'])),
            'footer' => 'disable'
        ]);
    }

    public function order_list()
    {
        $this->author->onlySeller();

        $store = new Store();
        $transaction = new Transaction();
        $followers = new Follower();
        $store = $store->find('seller_id', $_SESSION['user_id']);

        return $this->render('store/order_list', [
            'title' => 'List Pemesanan',
            'transactions' => $transaction->findAllWhereIn('status_pengiriman', ['Dalam antrian', 'Dikirim'], 'toko_id', $store['id']),
            'followers' => count($followers->findAllById('toko_id', $store['id'])),
            'product_name' => function ($id) {
                $product = new Product();
                return $product->find('id', $id)['nama_produk'];
            },
            'store' => $store,
            'footer' => 'disable'
        ]);
    }

    public function print_resi(Request $request)
    {
        $this->author->onlySeller();

        $transaction = new Transaction();
        $store = new Store();
        $address = new Address();
        $product = new Product();

        $id = $request->getRouteParams()['id'];
        $tokoID = $transaction->find('id', $id)['toko_id'];
        $alamatID = $transaction->find('id', $id)['alamat_id'];
        $produkID = $transaction->find('id', $id)['produk_id'];


        return $this->render('store/print_resi', [
            'title' => 'Cetak Resi',
            'barcode' => function ($number, $widthFactor, $height) {
                $generatorHTML = new BarcodeGeneratorHTML();
                return $generatorHTML->getBarcode("$number", $generatorHTML::TYPE_CODE_128, $widthFactor, $height);
            },
            'resi' => $transaction->find('id', $id),
            'sender' => $store->find('id', $tokoID),
            'address' => $address->find('id', $alamatID),
            'product' => $product->find('id', $produkID)
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
        Response::redirect('/manajemen_produk')->withSuccess("Berhasil menambahkan produk baru ke toko");
    }

    public function deleteProductHandler(Request $request)
    {
        $request = $request->getFormData();
        $product = new Product();
        $product->delete('id', $request['product_id']);
        Response::redirect('/manajemen_produk')->withSuccess("Berhasil menghapus produk");
    }

    public function editStoreHandler(Request $request)
    {
        $request = $request->getFormData();
        $store = new Store();
        if ($request['data_1']) {
            $sanitized = [
                'nama_toko' => htmlspecialchars(trim($request['nama_toko'])),
                'jam_buka' => htmlspecialchars(trim($request['jam_buka'])),
                'jam_tutup' => htmlspecialchars(trim($request['jam_tutup'])),
                'telepon' => htmlspecialchars(trim($request['telepon'])),
                'deskripsi' => htmlspecialchars(trim($request['deskripsi'])),
            ];

            $uploadDir = '/img/profile_toko/';
            $fileManager = new FileManagement(['jpg', 'jpeg', 'png']);
            $currentSeller = $store->find('seller_id', $_SESSION['user_id']);

            try {
                if (!empty($_FILES['foto_toko']['name'])) {
                    if (!empty($currentSeller['foto_toko'])) {
                        $oldProfilePicture = $_SERVER['DOCUMENT_ROOT'] . $currentSeller['foto_toko'];
                        if (file_exists($oldProfilePicture)) {
                            unlink("$oldProfilePicture");
                        }
                    }

                    $uniqueFileName = $fileManager->handleFileUpload('foto_toko', $uploadDir);
                    $sanitized['foto_toko'] = $uploadDir . $uniqueFileName;
                }
            } catch (\Exception $e) {
                echo 'File Upload Error: ' . $e->getMessage();
                return;
            }

            $store->update($sanitized, $_SESSION['user_id'], 'seller_id');
            Response::redirect('/edit_toko')->withSuccess("Toko Anda berhasil di perbarui");
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
            Response::redirect('/edit_toko')->withSuccess("Alamat toko Anda berhasil di perbarui");
        }
    }

    public function editProductHandler(Request $request)
    {
        $id = $request->getRouteParams()['id'];
        $request = $request->getFormData();

        $product = new Product();
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
            'status_produk' => htmlspecialchars(trim($request['status_produk']))
        ];

        $product->update($sanitized, $id);
        Response::redirect('/manajemen_produk')->withSuccess("Berhasil memperbarui produk");
    }

    public function orderListHandler(Request $request)
    {
        $this->author->onlySeller();

        $request = $request->getFormData();
        $transaction = new Transaction();

        $trans_id = $request['trans_id'];
        $sanitized = [
            'status_pengiriman' => htmlspecialchars(trim($request['status_pengiriman']))
        ];

        $transaction->update($sanitized, $trans_id);
        Response::redirect('/daftar-pesanan')->withSuccess('Berhasil memperbarui status pengiriman');
    }
}
