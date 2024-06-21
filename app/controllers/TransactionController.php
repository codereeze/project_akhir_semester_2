<?php

namespace App\Controllers;

use App\Middleware\Authorization;
use App\Models\Transaction;
use Libraries\Controller;

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
            'diulas' => $transaction->transaction($_SESSION['user_id'], 'Ulasan'),
        ]);
    }

    public function detail_transaction()
    {
        $this->author->userAndSeller();

        return $this->render('users/detail_transaction', [
            'title' => 'Detail Transaksi'
        ]);
    }
}
