<?php

namespace App\Controllers;

use App\Middleware\Authorization;
use App\Models\Address;
use App\Models\Category;
use App\Models\Notification;
use App\Models\Product;
use App\Models\SellerRegistration;
use App\Models\Store;
use App\Models\Transaction;
use App\Models\User;
use Libraries\Controller;
use Libraries\MailModel;
use Libraries\Request;
use Libraries\Response;

class AdminController extends Controller
{
    private Authorization $author;

    public function __construct()
    {
        $this->layout = 'admin';
        $this->author = new Authorization();
    }

    public function dashboard()
    {
        $this->author->onlyAdmin();

        $user = new User();
        $category = new Category();
        $transaction = new Transaction();
        return $this->render('admin/dashboard', [
            'title' => 'Dashboard Admin',
            'users' => count($user->findAllWhere('role', 'User')),
            'admins' => count($user->findAllWhere('role', 'Admin')),
            'sellers' => count($user->findAllWhere('role', 'Seller')),
            'categories' => count($category->selectAll()),
            'transactions' => $transaction->leftJoinAll(['user_id', 'produk_id'], ['users', 'products']),
            'sayHelloAdmin' => function () {
                date_default_timezone_set('Asia/Jakarta'); // Atur zona waktu sesuai lokasi Anda
                $jam = date("H");

                if ($jam >= 0 && $jam < 12) {
                    return "Selamat Pagi Admin, semoga harimu menyenangkan";
                } elseif ($jam >= 12 && $jam < 15) {
                    return "Selamat Siang Admin, semoga harimu menyenangkan";
                } elseif ($jam >= 15 && $jam < 18) {
                    return "Selamat Sore Admin, semoga harimu menyenangkan";
                } else {
                    return "Selamat Malam Admin, semoga harimu menyenangkan";
                }
            }
        ]);
    }

    public function master_data_admin()
    {
        $this->author->onlyAdmin();

        $admin = new User();
        return $this->render('admin/master_data/admin', [
            'title' => 'Master Data Admin',
            'admins' => $admin->findAllWhere('role', 'Admin')
        ]);
    }

    public function master_data_seller()
    {
        $this->author->onlyAdmin();

        $store = new Store();
        return $this->render('admin/master_data/seller', [
            'title' => 'Master Data Seller',
            'sellers' => $store->leftJoinAll(['seller_id'], ['users'])
        ]);
    }

    public function master_data_user()
    {
        $this->author->onlyAdmin();

        $user = new User();
        return $this->render('admin/master_data/user', [
            'title' => 'Master Data User',
            'users' => $user->findAllWhere('role', 'User')
        ]);
    }

    public function master_data_category()
    {
        $this->author->onlyAdmin();

        $category = new Category();
        $product = new Product();
        return $this->render('admin/master_data/category', [
            'title' => 'Master Data Kategori',
            'categories' => $category->selectAll(),
            'countProduct' => fn ($id) => count($product->findAllById('kategori_id', $id))
        ]);
    }

    public function master_data_product()
    {
        $this->author->onlyAdmin();

        $product = new Product();
        return $this->render('admin/master_data/product', [
            'title' => 'Master Data Produk',
            'products' => $product->leftJoinAll(['toko_id', 'kategori_id'], ['stores', 'categories'])
        ]);
    }

    public function seller_register()
    {
        $this->author->onlyAdmin();

        $registration = new SellerRegistration();
        return $this->render('admin/master_data/seller_register', [
            'title' => 'Pendaftaran Seller',
            'registrations' => $registration->leftJoinAll(['user_id'], ['users'], 'status', 'Menunggu persetujuan')
        ]);
    }

    public function transaction_management()
    {
        $this->author->onlyAdmin();

        $transaction = new Transaction();
        return $this->render('admin/master_data/transaction', [
            'title' => 'Manajemen Transaksi',
            'transactions' => $transaction->leftJoinAll(['user_id', 'produk_id'], ['users', 'products'])
        ]);
    }

    public function profile()
    {
        $this->author->onlyAdmin();

        return $this->render('admin/profile', [
            'title' => 'Profile Admin',
        ]);
    }

    public function create_notification()
    {
        $this->author->onlyAdmin();

        $user = new User();
        $notification = new Notification();
        return $this->render('admin/create_notification', [
            'title' => 'Buat Notifikasi',
            'receivers' => $user->findAllWhereIn('role', ['User', 'Seller']),
            'notifications' => $notification->leftJoinAll(['penerima_id'], ['users'], 'pengirim_id', $_SESSION['user_id'])
        ]);
    }

    public function send_email()
    {
        $this->author->onlyAdmin();

        $user = new User();
        return $this->render('admin/send_email', [
            'title' => 'Kirim Email',
            'receivers' => $user->findAllWhereIn('role', ['User', 'Seller'])
        ]);
    }

    public function detail_register(Request $request)
    {
        $this->author->onlyAdmin();

        $id = $request->getRouteParams()['id'];
        $register = new SellerRegistration();
        return $this->render('admin/detail_master_data/detail_register', [
            'title' => 'Detail Pendaftaran Calon Seller',
            'data' => $register->find('id', $id),
        ]);
    }

    public function detail_admin(Request $request)
    {
        $this->author->onlyAdmin();

        $user = new User();
        $id = $request->getRouteParams()['id'];
        return $this->render('admin/detail_master_data/detail_admin', [
            'title' => 'Detail Admin',
            'dataAdmin' => $user->find('id', $id)
        ]);
    }

    public function detail_seller(Request $request)
    {
        $this->author->onlyAdmin();

        $user = new User();
        $store = new Store();
        $address = new Address();
        $id = $request->getRouteParams()['id'];
        return $this->render('admin/detail_master_data/detail_seller', [
            'title' => 'Detail Seller',
            'dataSeller' => $user->find('id', $id),
            'dataStore' => $store->find('seller_id', $id),
            'addresses' => $address->findAllById('user_id', $id)
        ]);
    }

    public function detail_user(Request $request)
    {
        $this->author->onlyAdmin();

        $user = new User();
        $address = new Address();
        $id = $request->getRouteParams()['id'];
        return $this->render('admin/detail_master_data/detail_user', [
            'title' => 'Detail User',
            'dataUser' => $user->find('id', $id),
            'addresses' => $address->findAllById('user_id', $id)
        ]);
    }

    public function detail_product(Request $request)
    {
        $this->author->onlyAdmin();

        $product = new Product();
        $id = $request->getRouteParams()['id'];
        return $this->render('admin/detail_master_data/detail_product', [
            'title' => 'Detail Produk',
            'dataProduct' => $product->leftJoinAll(['toko_id', 'kategori_id'], ['stores', 'categories'], 'id', (int)$id)[0],
            'checkSize' => function ($size, $isYes) {
                switch ($isYes) {
                    case 'Yes':
                        echo "$size ";
                        break;
                    default:
                        echo '';
                }
            }
        ]);
    }

    public function detail_transaction(Request $request)
    {
        $this->author->onlyAdmin();

        $transaction = new Transaction();
        $id = $request->getRouteParams()['id'];
        return $this->render('admin/detail_master_data/detail_transaction', [
            'title' => 'Detail Transaksi',
            'transaction' => $transaction->leftJoinAll(['user_id', 'produk_id', 'alamat_id'], ['users', 'products', 'addresses'], 'id', $id)[0]
        ]);
    }

    public function createNotifHandler(Request $request)
    {
        $request = $request->getFormData();

        if ($request['postRequest'] == 'insert') {
            $notification = new Notification();
            $user = new User();

            $sanitized = [
                'judul' => htmlspecialchars(trim($request['judul'])),
                'pengirim_id' => $_SESSION['user_id'],
                'penerima_id' => htmlspecialchars(trim($request['penerima_id'])),
                'pesan' => htmlspecialchars(trim($request['pesan']))
            ];

            $userName = $user->find('id', $sanitized['penerima_id'])['nama'];

            $notification->insert($sanitized);
            Response::redirect('/admin/buat_notifikasi')->withSuccess("Berhasil mengirimkan notifikasi kepada $userName");
        } elseif ($request['postRequest'] == 'delete') {
            $this->deleteNotifHandler($request['notif_id']);
        }
    }

    public function deleteNotifHandler($notif_id)
    {
        $notification = new Notification();
        $notification->delete('id', $notif_id);

        Response::redirect('/admin/buat_notifikasi')->withSuccess("Berhasil menghapus notifikasi");
    }

    public function sendEmailHandler(Request $request)
    {
        $request = $request->getFormData();
        $model = new MailModel();
        $admin = new User();
        $admin_name = $admin->find('id', $_SESSION['user_id'])['nama'];

        $sanitized = [
            'judul' => htmlspecialchars(trim($request['judul'])),
            'email' => htmlspecialchars(trim($request['email'])),
            'pesan' => htmlspecialchars(trim($request['pesan']))
        ];

        $model->sendMail($sanitized['email'], $sanitized['judul'], $sanitized['pesan'], $admin_name);
        Response::redirect('/admin/kirim_email')->withSuccess("Berhasil mengirimkan email kepada {$sanitized['email']}");
    }
}
