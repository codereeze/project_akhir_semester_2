<?php

namespace App\Controllers;

use App\Middleware\Authorization;
use App\Models\User;
use Database\Database;
use Libraries\Auth;
use Libraries\Controller;
use Libraries\Request;
use Libraries\Response;

class AuthController extends Controller
{
    private Authorization $author;

    public function __construct()
    {
        $this->layout = 'auth';
        $this->author = new Authorization();
    }

    public function login()
    {
        $this->author->onlyGuest();

        return $this->render('auth/login', [
            'title' => 'Login ke Aplikasi'
        ]);
    }

    public function register()
    {
        $this->author->onlyGuest();

        return $this->render('auth/register', [
            'title' => 'Membuat Akun Baru'
        ]);
    }

    public function loginHandler(Request $request)
    {
        Auth::initialize(new Database());
        if (Auth::attempt($request->getFormData())) {
            Response::redirect('/');
        } else {
            echo "NT Bang";
        }
    }

    public function registerHandler(Request $request)
    {
        $request = $request->getFormData();
        if($request['password'] !== $request['confirm_password']){
            return;
        }

        $username = explode(' ', trim($request['nama']));
        $sanitized = [
            'username' => end($username),
            'nama' => htmlspecialchars(trim($request['nama'])),
            'email' => htmlspecialchars(trim($request['email'])),
            'password' => password_hash(trim($request['password']), PASSWORD_BCRYPT)
        ];

        $user = new User();
        $user->insert($sanitized);
        Response::redirect('/login');
    }
    
    public function logout()
    {
        session_start();
        session_unset();
        session_destroy();
        Response::redirect('/');
    }
}
