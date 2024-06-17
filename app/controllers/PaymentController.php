<?php

namespace App\Controllers;

use App\Middleware\Authorization;
use App\Models\Address;
use App\Models\Product;
use Libraries\Controller;
use Libraries\Request;

class PaymentController extends Controller
{
    private Authorization $author;

    public function __construct()
    {
        $this->author = new Authorization();
    }

    public function checkout(Request $request)
    {
        $this->author->userAndSeller();

        $product = new Product();
        $address = new Address();
        $request = $request->getRouteParams();

        return $this->render('checkout', [
            'title' => 'Checkout',
            'product' => $product->find('id', $request['id']),
            'address' => $address->find('user_id', $_SESSION['user_id'], 'status', 'Utama')
        ]);
    }
}