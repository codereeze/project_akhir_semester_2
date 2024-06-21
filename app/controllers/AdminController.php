<?php

namespace App\Controllers;

use App\Middleware\Authorization;
use Libraries\Controller;

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

        return $this->render('admin/dashboard', [
            'title' => 'Dashboard Admin'
        ]);
    }

    public function master_data_admin()
    {
        $this->author->onlyAdmin();

        return $this->render('admin/master_data/admin', [
            'title' => 'Master Data Admin'
        ]);
    }

    public function master_data_seller()
    {
        $this->author->onlyAdmin();

        return $this->render('admin/master_data/seller', [
            'title' => 'Master Data Seller'
        ]);
    }

    public function master_data_user()
    {
        $this->author->onlyAdmin();
        
        return $this->render('admin/master_data/user', [
            'title' => 'Master Data User'
        ]);
    }

    public function master_data_category()
    {
        $this->author->onlyAdmin();

        return $this->render('admin/master_data/category', [
            'title' => 'Master Data Kategori'
        ]);
    }

    public function master_data_product()
    {
        $this->author->onlyAdmin();

        return $this->render('admin/master_data/product', [
            'title' => 'Master Data Produk'
        ]);
    }

    public function seller_register()
    {
        $this->author->onlyAdmin();

        return $this->render('admin/master_data/seller_register', [
            'title' => 'Pendaftaran Seller'
        ]);
    }

    public function transaction_management()
    {
        $this->author->onlyAdmin();

        return $this->render('admin/master_data/transaction', [
            'title' => 'Manajemen Transaksi'
        ]);
    }

    public function profile()
    {
        $this->author->onlyAdmin();

        return $this->render('admin/profile', [
            'title' => 'Profile Admin'
        ]);
    }

    public function notification()
    {
        $this->author->onlyAdmin();

        return $this->render('admin/notification', [
            'title' => 'Notifikasi'
        ]);
    }

    public function createNotification()
    {
        $this->author->onlyAdmin();

        return $this->render('admin/create_notification', [
            'title' => 'Buat Notifikasi'
        ]);
    }

    public function sendEmail()
    {
        $this->author->onlyAdmin();

        return $this->render('admin/send_email', [
            'title' => 'Kirim Email'
        ]);
    }
}
