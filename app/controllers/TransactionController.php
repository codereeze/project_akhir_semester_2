<?php

namespace App\Controllers;

use App\Middleware\Authorization;
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
        
        return $this->render('users/transaction', [
            'title' => 'Transaksi Saya'
        ]);
    }
}
