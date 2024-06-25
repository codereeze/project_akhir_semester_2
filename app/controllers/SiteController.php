<?php

namespace App\Controllers;

use App\Middleware\Authorization;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Follower;
use App\Models\Product;
use App\Models\SellerRegistration;
use App\Models\Store;
use App\Models\Transaction;
use Libraries\Controller;
use Libraries\FileManagement;
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

        $rs = new SellerRegistration();

        return $this->render('register_seller', [
            'title' => 'Daftar Menjadi Seller',
            'status' => $rs->find('user_id', $_SESSION['user_id'])['status'] ?? [],
        ]);
    }

    public function registerSellerHandler(Request $request)
    {
        $formData = $request->getFormData();

        $sr = new SellerRegistration();

        if ($formData['resend'] == 'resend') {
            $this->resendSeller($sr);
        }

        $sanitized = [
            'user_id' => $_SESSION['user_id'],
            'nama_pemilik' => htmlspecialchars(trim($formData['nama_pemilik'])),
            'nik' => htmlspecialchars(trim($formData['nik'])),
            'telepon' => htmlspecialchars(trim($formData['telepon'])),
            'nama_jalan' => htmlspecialchars(trim($formData['nama_jalan'])),
            'kelurahan' => htmlspecialchars(trim($formData['kelurahan'])),
            'kecamatan' => htmlspecialchars(trim($formData['kecamatan'])),
            'kab_kot' => htmlspecialchars(trim($formData['kab_kot'])),
            'provinsi' => htmlspecialchars(trim($formData['provinsi'])),
            'kode_pos' => htmlspecialchars(trim($formData['kode_pos'])),
            'nama_toko' => htmlspecialchars(trim($formData['nama_toko'])),
            'jam_buka' => htmlspecialchars(trim($formData['jam_buka'])),
            'jam_tutup' => htmlspecialchars(trim($formData['jam_tutup'])),
            'deskripsi' => htmlspecialchars(trim($formData['deskripsi'])),
            'status' => 'Menunggu persetujuan',
        ];

        $uploadDir = '/img/seller_register/';
        $fileManager = new FileManagement(['jpg', 'jpeg', 'png']);

        try {
            if (!empty($_FILES['foto_diri']['name'])) {
                $uniqueFileName = $fileManager->handleFileUpload('foto_diri', $uploadDir);
                $sanitized['foto_diri'] = $uploadDir . $uniqueFileName;
            }
            if (!empty($_FILES['foto_ktp']['name'])) {
                $uniqueFileName = $fileManager->handleFileUpload('foto_ktp', $uploadDir);
                $sanitized['foto_ktp'] = $uploadDir . $uniqueFileName;
            }
            if (!empty($_FILES['foto_toko']['name'])) {
                $uniqueFileName = $fileManager->handleFileUpload('foto_toko', $uploadDir);
                $sanitized['foto_toko'] = $uploadDir . $uniqueFileName;
            }
        } catch (\Exception $e) {
            echo 'File Upload Error: ' . $e->getMessage();
            return;
        }

        $sr->insert($sanitized);

        Response::redirect('/menjadi_seller')->withSuccess("Pengajuan menjadi seller berhasil dikirim, silahkan tunggu beberapa saat");
    }

    private function resendSeller($sr)
    {
        $file = $sr->find('user_id', $_SESSION['user_id']);

        $oldCoverPicture = $_SERVER['DOCUMENT_ROOT'] . $file['foto_diri'];
        if (file_exists($oldCoverPicture)) {
            unlink("$oldCoverPicture");
        }
        $oldCoverPicture = $_SERVER['DOCUMENT_ROOT'] . $file['foto_ktp'];
        if (file_exists($oldCoverPicture)) {
            unlink("$oldCoverPicture");
        }
        $oldCoverPicture = $_SERVER['DOCUMENT_ROOT'] . $file['foto_toko'];
        if (file_exists($oldCoverPicture)) {
            unlink("$oldCoverPicture");
        }

        $sr->delete('user_id', $_SESSION['user_id']);
        Response::redirect('/menjadi_seller');
    }
}
