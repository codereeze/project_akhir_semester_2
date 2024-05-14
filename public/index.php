<?php

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
$app->route::get('/login', [AuthController::class, 'login']);
$app->route::get('/register', [AuthController::class, 'register']);
$app->run();