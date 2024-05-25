<?php

namespace App\Controllers;

use Framework\Controller;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->layout = 'auth';
    }

    public function login()
    {
        return $this->render('auth/login', [
            'title' => 'Login ke Aplikasi'
        ]);
    }

    public function register()
    {
        return $this->render('auth/register', [
            'title' => 'Membuat Akun Baru'
        ]);
    }
}
