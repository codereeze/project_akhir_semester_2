<?php

namespace App\Controllers;

use App\Middleware\Authorization;
use App\Models\User;
use Database\Database;
use Libraries\Auth;
use Libraries\Controller;
use Libraries\FacebookOAuthClient;
use Libraries\GoogleOAuthClient;
use Libraries\Request;
use Libraries\Response;

class AuthController extends Controller
{
    private Authorization $author;
    private $providerGoogle;
    private $providerFacebook;

    public function __construct()
    {
        $this->layout = 'auth';
        $this->author = new Authorization();

        $googleOAuth = new GoogleOAuthClient();
        $facebookOAuth = new FacebookOAuthClient();

        $this->providerGoogle = $googleOAuth->provider;
        $this->providerFacebook = $facebookOAuth->provider;
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

    public function forgot_password()
    {
        $this->author->onlyGuest();

        return $this->render('auth/forgot_password', [
            'title' => 'Lupa Password'
        ]);
    }

    public function loginHandler(Request $request)
    {
        if ($request->getFormData()['google']) {
            $googleOAuth = new GoogleOAuthClient();
            $googleOAuth->getCode();
            exit();
        } else if ($request->getFormData()['facebook']) {
            $facebookOAuth = new FacebookOAuthClient();
            $facebookOAuth->getCode();
            exit();
        }

        Auth::initialize(new Database());
        if (Auth::attempt($request->getFormData())) {
            Response::redirect('/');
        } else {
            Response::redirect('/login')->withError('Email atau password yang Anda masukkan tidak valid');
        }
    }

    public function registerHandler(Request $request)
    {
        if ($request->getFormData()['google']) {
            $googleOAuth = new GoogleOAuthClient();
            $googleOAuth->getCode();
            exit();
        } else if ($request->getFormData()['facebook']) {
            $facebookOAuth = new FacebookOAuthClient();
            $facebookOAuth->getCode();
            exit();
        }

        $request = $request->getFormData();
        if ($request['password'] !== $request['confirm_password']) {
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
        Response::redirect('/login')->withSuccess('Akun berhasil dibuat, silahkan login dengan akun yang dibuat');
    }

    public function googleCallback()
    {
        if (isset($_GET['code'])) {
            try {
                $accessToken = $this->providerGoogle->getAccessToken('authorization_code', [
                    'code' => $_GET['code']
                ]);

                $resourceOwner = $this->providerGoogle->getResourceOwner($accessToken);
                $user = $resourceOwner->toArray();

                if (Auth::attemptOAuthGoogle($user)) {
                    Response::redirect('/');
                } else {
                    $userModel = new User();
                    $username = explode(' ', $user['name']);

                    $googleData = [
                        'username' => strtolower(end($username)),
                        'nama' => $user['name'],
                        'email' => $user['email'],
                        'foto_profile' => $user['picture'] ?? '',
                    ];

                    $userModel->insert($googleData);

                    if (Auth::attemptOAuthGoogle($user)) {
                        Response::redirect('/');
                    } else {
                        exit('Failed to authenticate new user');
                    }
                }
            } catch (\League\OAuth2\Client\Provider\Exception\IdentityProviderException $e) {
                exit('Error during OAuth callback: ' . $e->getMessage());
            }
        } else {
            exit('Authorization code not received');
        }
    }

    public function facebookCallback()
    {
        if (isset($_GET['code'])) {
            try {
                $accessToken = $this->providerFacebook->getAccessToken('authorization_code', [
                    'code' => $_GET['code']
                ]);

                $resourceOwner = $this->providerFacebook->getResourceOwner($accessToken);
                $user = $resourceOwner->toArray();

                if (Auth::attemptOAuthFacebook($user)) {
                    Response::redirect('/');
                } else {
                    $userModel = new User();
                    $username = explode(' ', $user['name']);

                    $googleData = [
                        'username' => strtolower(end($username)),
                        'nama' => $user['name'],
                        'email' => $user['email'],
                        'foto_profile' => $user['picture'] ?? '',
                    ];

                    $userModel->insert($googleData);

                    if (Auth::attemptOAuthFacebook($user)) {
                        Response::redirect('/');
                    } else {
                        exit('Failed to authenticate new user');
                    }
                }
            } catch (\League\OAuth2\Client\Provider\Exception\IdentityProviderException $e) {
                exit($e->getMessage());
            }
        } else {
            exit('Authorization code not received');
        }
    }

    public function logout()
    {
        session_start();
        session_unset();
        session_destroy();
        Response::redirect('/');
    }
}
