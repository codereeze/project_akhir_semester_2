<?php

namespace App\Controllers;

use Framework\Controller;

class AuthController extends Controller
{
    public function login()
    {
        $this->layout = 'auth';
        return $this->render('auth/login', [
            'title' => 'Login ke Aplikasi'
        ]);
    }

    public function register()
    {
        $this->layout = 'auth';
        return $this->render('auth/register', [
            'title' => 'Membuat Akun Baru'
        ]);
    }
}
