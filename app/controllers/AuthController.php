<?php

namespace App\Controllers;

use App\Models\User;
use Framework\Auth;
use Framework\Controller;
use Framework\Request;
use Framework\Response;

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

    public function loginHandler(Request $request)
    {
        if (Auth::attempt($request->getFormData())) {
            Response::redirect('/');
        }else{
            echo "NT Bang";
        }
    }

    public function registerHandler(Request $request)
    {
        $request = $request->getFormData();
        $sanitized = [
            'nama' => htmlspecialchars($request['nama']),
            'email' => htmlspecialchars($request['email']),
            'password' => htmlspecialchars($request['password'])
        ];

        User::insert($sanitized);
        Response::redirect('/login');
    }
}
