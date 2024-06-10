<?php

namespace App\Controllers;

use Libraries\Controller;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->layout = 'admin';
    }

    public function dashboard()
    {
        return $this->render('admin/dashboard', [
            'title' => 'Dashboard Admin'
        ]);
    }

    public function master_data_admin()
    {
        return $this->render('admin/master_data/admin', [
            'title' => 'Master Data Admin'
        ]);
    }

    public function master_data_seller()
    {
        return $this->render('admin/master_data/seller', [
            'title' => 'Master Data Seller'
        ]);
    }

    public function master_data_user()
    {
        return $this->render('admin/master_data/user', [
            'title' => 'Master Data User'
        ]);
    }

    public function master_data_category()
    {
        return $this->render('admin/master_data/category', [
            'title' => 'Master Data Kategori'
        ]);
    }

    public function master_data_product()
    {
        return $this->render('admin/master_data/product', [
            'title' => 'Master Data Produk'
        ]);
    }

    public function profile()
    {
        return $this->render('admin/profile', [
            'title' => 'Profile Admin'
        ]);
    }

    public function notification()
    {
        return $this->render('admin/notification', [
            'title' => 'Notifikasi'
        ]);
    }

    public function createNotification()
    {
        return $this->render('admin/create_notification', [
            'title' => 'Buat Notifikasi'
        ]);
    }

    public function sendEmail()
    {
        return $this->render('admin/send_email', [
            'title' => 'Kirim Email'
        ]);
    }
}
