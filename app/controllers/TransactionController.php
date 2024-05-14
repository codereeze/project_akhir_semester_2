<?php

namespace App\Controllers;

use Framework\Controller;

class TransactionController extends Controller
{
    public function transaction()
    {
        return $this->render('users/transaction', [
            'title' => 'Transaksi Saya'
        ]);
    }
}
