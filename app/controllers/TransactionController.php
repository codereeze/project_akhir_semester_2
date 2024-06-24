<?php

namespace App\Controllers;

use App\Middleware\Authorization;
use App\Models\Address;
use App\Models\Comment;
use App\Models\Product;
use App\Models\Transaction;
use App\Models\User;
use Libraries\Controller;
use Libraries\FileManagement;
use Libraries\Request;
use Libraries\Response;

class TransactionController extends Controller
{
    private Authorization $author;

    public function __construct()
    {
        $this->author = new Authorization();
    }

    public function transaction()
    {
        $this->author->userAndSeller();

        $transaction = new Transaction();
        return $this->render('users/transaction', [
            'title' => 'Transaksi Saya',
            'antrian' => $transaction->transaction($_SESSION['user_id'], 'Dalam antrian'),
            'dikirim' => $transaction->transaction($_SESSION['user_id'], 'Dikirim'),
            'selesai' => $transaction->transaction($_SESSION['user_id'], 'Selesai'),
            'diulas' => $transaction->transaction($_SESSION['user_id'], 'Sudah diulas'),
            'ulasan' => function ($id) {
                $comment = new Comment();
                return $comment->find('trans_id', $id);
            }
        ]);
    }

    public function detail_transaction(Request $request)
    {
        $this->author->userAndSeller();

        $transaction = new Transaction();
        $address = new Address();
        $product = new Product();

        $id_transaksi = $request->getRouteParams()['id'];
        $id_alamat = $transaction->find('id', $id_transaksi)['alamat_id'];
        $id_produk = $transaction->find('id', $id_transaksi)['produk_id'];

        return $this->render('users/detail_transaction', [
            'title' => 'Detail Transaksi',
            'transaction' => $transaction->find('id', $id_transaksi),
            'address' => $address->find('id', $id_alamat),
            'product' => $product->find('id', $id_produk),
        ]);
    }

    public function commentProductHandler(Request $request)
    {
        $request = $request->getFormData();

        $comment = new Comment();
        $transaction = new Transaction();

        $date = new \DateTime();
        $formattedDate = $date->format("Y-m-d");
        $formattedDate = str_replace(
            ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
            ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'],
            $formattedDate
        );

        $sanitized = [
            'rating' => htmlspecialchars(trim($request['rating'])),
            'komentar' => htmlspecialchars(trim($request['komentar'])),
            'produk_id' => htmlspecialchars(trim($request['produk_id'])),
            'user_id' => $_SESSION['user_id'],
            'trans_id' => htmlspecialchars(trim($request['trans_id'])),
            'tanggal' => $formattedDate,
        ];

        $status_pengiriman = [
            'status_pengiriman' => htmlspecialchars(trim($request['status_pengiriman']))
        ];

        $uploadDir = '/img/comment/';
        $fileManager = new FileManagement(['jpg', 'jpeg', 'png']);

        $user = new User();
        $currentUser = $user->find('id', $_SESSION['user_id']);

        try {
            if (!empty($_FILES['gambar']['name'])) {
                if (!empty($currentUser['gambar'])) {
                    $oldProfilePicture = $_SERVER['DOCUMENT_ROOT'] . $currentUser['gambar'];
                    if (file_exists($oldProfilePicture)) {
                        unlink("$oldProfilePicture");
                    }
                }

                $uniqueFileName = $fileManager->handleFileUpload('gambar', $uploadDir);
                $sanitized['gambar'] = $uploadDir . $uniqueFileName;
            }
        } catch (\Exception $e) {
            echo 'File Upload Error: ' . $e->getMessage();
            return;
        }

        $comment->insert($sanitized);
        $transaction->update($status_pengiriman, $request['trans_id'], 'id');
        Response::redirect('/transaksi')->withSuccess('Produk berhasil di ulas');
    }
}
