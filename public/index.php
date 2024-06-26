<?php

use App\Controllers\AdminController;
use App\Controllers\AuthController;
use App\Controllers\CartController;
use App\Controllers\ChatController;
use App\Controllers\CompanyController;
use App\Controllers\ErrorController;
use App\Controllers\NotificationController;
use App\Controllers\PaymentController;
use App\Controllers\ProductController;
use App\Controllers\ProfileController;
use App\Controllers\SiteController;
use App\Controllers\StoreController;
use App\Controllers\TransactionController;
use App\Models\Chat;
use App\Models\Store;
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
$app->route::get('/baca_notifikasi/{notif_id}', [NotificationController::class, 'read_notification']);
$app->route::get('/produk/{id}', [ProductController::class, 'product']);
$app->route::get('/checkout', [PaymentController::class, 'checkout']);
$app->route::get('/toko_saya', [StoreController::class, 'my_store']);
$app->route::get('/manajemen_produk', [StoreController::class, 'management_product']);
$app->route::get('/edit_produk/{id}', [StoreController::class, 'edit_product']);
$app->route::get('/edit_toko', [StoreController::class, 'edit_store']);
$app->route::get('/tambah_produk', [StoreController::class, 'add_product']);
$app->route::get('/detail-produk/{id}', [StoreController::class, 'detail_product']);
$app->route::get('/daftar-pesanan', [StoreController::class, 'order_list']);
$app->route::get('/menjadi_seller', [SiteController::class, 'register_seller']);
$app->route::get('/toko/{id}', [SiteController::class, 'store']);
$app->route::get('/chat-penjual', [ChatController::class, 'chat_seller']);
$app->route::get('/edit-alamat/{id}', [ProfileController::class, 'edit_address']);
$app->route::get('/detail-transaksi/{id}', [TransactionController::class, 'detail_transaction']);
$app->route::get('/syarat-ketentuan', [CompanyController::class, 'terms_conditions']);
$app->route::get('/kebijakan-privasi', [CompanyController::class, 'privacy_policy']);
$app->route::get('/kontak-kami', [CompanyController::class, 'contact']);
$app->route::get('/tentang-kami', [CompanyController::class, 'about']);
$app->route::get('/berita-artikel', [CompanyController::class, 'news']);
$app->route::get('/pembayaran-sukses', [PaymentController::class, 'payment_success']);
$app->route::get('/cetak-resi/{id}', [StoreController::class, 'print_resi']);
$app->route::get('/buat-notifikasi', [StoreController::class, 'create_notification']);
$app->route::get('/pesanan-selesai', [StoreController::class, 'order_list_success']);
$app->route::get('/hasil-pencarian', [SiteController::class, 'search_result']);
$app->route::get('/read-chat/{id}', [ChatController::class, 'read_chat']);


// User & Seller route (post)
$app->route::post('/profile', [ProfileController::class, 'profileUpdateHandler']);
$app->route::post('/atur_alamat', [ProfileController::class, 'setAddressHandler']);
$app->route::post('/ganti_password', [ProfileController::class, 'changePasswordHandler']);
$app->route::post('/tambah_produk', [StoreController::class, 'addProductHandler']);
$app->route::post('/manajemen_produk', [StoreController::class, 'deleteProductHandler']);
$app->route::post('/edit_toko', [StoreController::class, 'editStoreHandler']);
$app->route::post('/produk/{id}', [ProductController::class, 'postHandler']);
$app->route::post('/menjadi_seller', [SiteController::class, 'register_seller']);
$app->route::post('/keranjang', [CartController::class, 'deleteHandler']);
$app->route::post('/edit-alamat/{id}', [ProfileController::class, 'editAddressHandler']);
$app->route::post('/daftar-pesanan', [StoreController::class, 'orderListHandler']);
$app->route::post('/edit_produk/{id}', [StoreController::class, 'editProductHandler']);
$app->route::post('/transaksi', [TransactionController::class, 'commentProductHandler']);
$app->route::post('/buat-notifikasi', [StoreController::class, 'createNotifHandler']);
$app->route::post('/pesanan-selesai', [StoreController::class, 'orderListHandler']);
$app->route::post('/checkout', [PaymentController::class, 'checkoutHandler']);
$app->route::post('/menjadi_seller', [SiteController::class, 'registerSellerHandler']);
$app->route::post('/read-chat/{id}', [ChatController::class, 'sendChatHandler']);
$app->route::post('/toko/{id}', [SiteController::class, 'storeHandler']);



// Auth route
$app->route::get('/login', [AuthController::class, 'login']);
$app->route::get('/register', [AuthController::class, 'register']);
$app->route::get('/lupa-password', [AuthController::class, 'forgot_password']);
$app->route::get('/logout', [AuthController::class, 'logout']);
$app->route::get('/google-callback', [AuthController::class, 'googleCallback']);
$app->route::get('/facebook-callback', [AuthController::class, 'facebookCallback']);

$app->route::post('/login', [AuthController::class, 'loginHandler']);
$app->route::post('/register', [AuthController::class, 'registerHandler']);


// Admin route
$app->route::get('/admin/dashboard', [AdminController::class, 'dashboard']);
$app->route::get('/admin/master_data_admin', [AdminController::class, 'master_data_admin']);
$app->route::get('/admin/master_data_seller', [AdminController::class, 'master_data_seller']);
$app->route::get('/admin/master_data_user', [AdminController::class, 'master_data_user']);
$app->route::get('/admin/master_data_kategori', [AdminController::class, 'master_data_category']);
$app->route::get('/admin/master_data_produk', [AdminController::class, 'master_data_product']);
$app->route::get('/admin/pendaftaran-seller', [AdminController::class, 'seller_register']);
$app->route::get('/admin/transaksi', [AdminController::class, 'transaction_management']);
$app->route::get('/admin/profile', [AdminController::class, 'profile']);
$app->route::get('/admin/notifikasi', [AdminController::class, 'notification']);
$app->route::get('/admin/buat_notifikasi', [AdminController::class, 'create_notification']);
$app->route::get('/admin/kirim_email', [AdminController::class, 'send_email']);
$app->route::get('/admin/detail-register/{id}', [AdminController::class, 'detail_register']);
$app->route::get('/admin/detail-admin/{id}', [AdminController::class, 'detail_admin']);
$app->route::get('/admin/detail-seller/{id}', [AdminController::class, 'detail_seller']);
$app->route::get('/admin/detail-user/{id}', [AdminController::class, 'detail_user']);
$app->route::get('/admin/detail-produk/{id}', [AdminController::class, 'detail_product']);
$app->route::get('/admin/detail-transaksi/{id}', [AdminController::class, 'detail_transaction']);


// Admin route (post)
$app->route::post('/admin/buat_notifikasi', [AdminController::class, 'createNotifHandler']);
$app->route::post('/admin/kirim_email', [AdminController::class, 'sendEmailHandler']);


// Error route
$app->route::get('/403', [ErrorController::class, 'forbidden']);
$app->route::get('/404', [ErrorController::class, 'not_found']);

$app->run();
