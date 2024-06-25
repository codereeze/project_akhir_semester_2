<?php

namespace App\Controllers;

use App\Middleware\Authorization;
use App\Models\Address;
use App\Models\Product;
use App\Models\Store;
use App\Models\Transaction;
use Carbon\Carbon;
use Libraries\Controller;
use Libraries\Request;
use Libraries\Response;

class PaymentController extends Controller
{
    private Authorization $author;

    public function __construct()
    {
        $this->author = new Authorization();
    }

    public function checkout()
    {
        $this->author->userAndSeller();

        if (!isset($_SESSION['checkout']) || !isset($address)) {
            Response::redirect('/');
        }

        $address = new Address();
        $product = new Product();
        $store = new Store();

        $estimationDate1 = date('d') + 3;
        $estimationDate2 = $estimationDate1 + 1;
        Carbon::setLocale('id');
        $getMonth = Carbon::now()->isoFormat('MMMM');
        $resultEstimation = "$estimationDate1 - $estimationDate2 $getMonth";

        return $this->render('checkout', [
            'title' => 'Checkout',
            'address' => $address->find('user_id', $_SESSION['user_id'], 'status', 'Utama'),
            'product' => $product->find('id', $_SESSION['checkout']['produk_id']),
            'store' => $store->find('id', $_SESSION['checkout']['toko_id']),
            'checkout' => $_SESSION['checkout'],
            'estimation' => $resultEstimation
        ]);
    }

    public function checkoutHandler(Request $request)
    {
        $request = $request->getFormData();

        $transaction = new Transaction();

        $sanitized = [
            'user_id' => (int)htmlspecialchars(trim($request['user_id'])),
            'produk_id' => (int)htmlspecialchars(trim($request['produk_id'])),
            'toko_id' => (int)htmlspecialchars(trim($request['toko_id'])),
            'alamat_id' => (int)htmlspecialchars(trim($request['alamat_id'])),
            'no_pesanan' => $this->generateNumberOrder(),
            'catatan_kurir' => htmlspecialchars(trim($request['catatan_kurir'])),
            'pembayaran' => htmlspecialchars(trim($request['pembayaran'])),
            'subtotal_produk' => htmlspecialchars(trim($request['subtotal_produk'])),
            'ongkir' => htmlspecialchars(trim($request['ongkir'])),
            'biaya_admin' => htmlspecialchars(trim($request['biaya_admin'])),
            'total_harga' => htmlspecialchars(trim($request['total_harga'])),
            'size' => htmlspecialchars(trim($request['size'])),
            'qty' => htmlspecialchars(trim($request['qty'])),
            'estimasi' => htmlspecialchars(trim($request['estimasi'])),
            'pengiriman' => htmlspecialchars(trim($request['pengiriman'])),
            'status_pengiriman' => 'Dalam antrian'
        ];

        $transaction->insert($sanitized);
        Response::redirect('/pembayaran-sukses');
    }

    public function payment_success()
    {
        $this->author->userAndSeller();
        $this->layout = 'blank';

        $address = new Address();
        $address = $address->findAllWhere('user_id', $_SESSION['user_id']);

        if (!isset($_SESSION['checkout']) && !isset($address)) {
            Response::redirect('/');
        }else{
            unset($_SESSION['checkout']);
        }

        return $this->render('payment', [
            'title' => 'Pembayaran Sukses',
        ]);
    }

    private function generateNumberOrder($length = 18) {
        $result = '';
        for ($i = 0; $i < $length; $i++) {
            $result .= random_int(0, 9);
        }
        return $result;
    }
}
