<?php

use App\Controllers\AdminController;
use App\Controllers\AuthController;
use App\Controllers\CartController;
use App\Controllers\NotificationController;
use App\Controllers\ProductController;
use App\Controllers\ProfileController;
use App\Controllers\SiteController;
use App\Controllers\StoreController;
use App\Controllers\TransactionController;
use Framework\Application;

require_once '../vendor/autoload.php';

$app = new Application(dirname(__DIR__));



// User & Seller route (get)
$app->route::get('/', [SiteController::class, 'home']);
$app->route::get('/hasil_pencarian', [SiteController::class, 'search_result']);
$app->route::get('/profile', [ProfileController::class, 'profile']);
$app->route::get('/atur_alamat', [ProfileController::class, 'set_address']);
$app->route::get('/ganti_password', [ProfileController::class, 'change_password']);
$app->route::get('/keranjang', [CartController::class, 'cart']);
$app->route::get('/transaksi', [TransactionController::class, 'transaction']);
$app->route::get('/notifikasi', [NotificationController::class, 'notification']);
$app->route::get('/baca_notifikasi', [NotificationController::class, 'read_notification']);
$app->route::get('/product', [ProductController::class, 'product']);
$app->route::get('/checkout', [ProductController::class, 'checkout']);
$app->route::get('/toko', [StoreController::class, 'store']);
$app->route::get('/manajemen_produk', [StoreController::class, 'management_product']);
$app->route::get('/edit_produk', [StoreController::class, 'edit_product']);
$app->route::get('/edit_toko', [StoreController::class, 'edit_store']);
$app->route::get('/profile_toko', [StoreController::class, 'profile_store']);
$app->route::get('/tambah_produk', [StoreController::class, 'add_product']);

// User & Seller route (get)
$app->route::post('/profile', [ProfileController::class, 'profileUpdateHandler']);
$app->route::post('/atur_alamat', [ProfileController::class, 'setAddressHandler']);



// Auth route
$app->route::get('/login', [AuthController::class, 'login']);
$app->route::get('/register', [AuthController::class, 'register']);
$app->route::get('/logout', [AuthController::class, 'logout']);
$app->route::post('/login', [AuthController::class, 'loginHandler']);
$app->route::post('/register', [AuthController::class, 'registerHandler']);


// Admin route
$app->route::get('/admin/dashboard', [AdminController::class, 'dashboard']);

$app->run();