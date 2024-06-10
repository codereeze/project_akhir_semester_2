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
use Libraries\Application;

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
$app->route::get('/toko_saya', [StoreController::class, 'my_store']);
$app->route::get('/manajemen_produk', [StoreController::class, 'management_product']);
$app->route::get('/edit_produk', [StoreController::class, 'edit_product']);
$app->route::get('/edit_toko', [StoreController::class, 'edit_store']);
$app->route::get('/profile_toko', [StoreController::class, 'profile_store']);
$app->route::get('/tambah_produk', [StoreController::class, 'add_product']);
$app->route::get('/detail_produk', [StoreController::class, 'detail_product']);


// User & Seller route (post)
$app->route::post('/profile', [ProfileController::class, 'profileUpdateHandler']);
$app->route::post('/atur_alamat', [ProfileController::class, 'setAddressHandler']);
$app->route::post('/ganti_password', [ProfileController::class, 'changePasswordHandler']);
$app->route::post('/tambah_produk', [StoreController::class, 'addProductHandler']);
$app->route::post('/manajemen_produk', [StoreController::class, 'deleteProductHandler']);
$app->route::post('/edit_toko', [StoreController::class, 'editStoreHandler']);


// Auth route
$app->route::get('/login', [AuthController::class, 'login']);
$app->route::get('/register', [AuthController::class, 'register']);
$app->route::get('/logout', [AuthController::class, 'logout']);
$app->route::post('/login', [AuthController::class, 'loginHandler']);
$app->route::post('/register', [AuthController::class, 'registerHandler']);


// Admin route
$app->route::get('/admin/dashboard', [AdminController::class, 'dashboard']);
$app->route::get('/admin/master_data_admin', [AdminController::class, 'master_data_admin']);
$app->route::get('/admin/master_data_seller', [AdminController::class, 'master_data_seller']);
$app->route::get('/admin/master_data_user', [AdminController::class, 'master_data_user']);
$app->route::get('/admin/master_data_kategori', [AdminController::class, 'master_data_category']);
$app->route::get('/admin/master_data_produk', [AdminController::class, 'master_data_product']);
$app->route::get('/admin/profile', [AdminController::class, 'profile']);
$app->route::get('/admin/notifikasi', [AdminController::class, 'notification']);
$app->route::get('/admin/buat_notifikasi', [AdminController::class, 'createNotification']);
$app->route::get('/admin/kirim_email', [AdminController::class, 'sendEmail']);

$app->run();