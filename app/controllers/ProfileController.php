<?php

namespace App\Controllers;

use App\Middleware\Authorization;
use App\Models\Address;
use App\Models\User;
use Libraries\Auth;
use Libraries\Controller;
use Libraries\Request;
use Libraries\Response;

class ProfileController extends Controller
{
    private Authorization $author;

    public function __construct()
    {
        $this->author = new Authorization();
    }

    public function profile()
    {
        $this->author->userAndSeller();

        return $this->render('users/profile/profile', [
            'title' => 'Profile'
        ]);
    }

    public function profileUpdateHandler(Request $request)
    {
        $request = $request->getFormData();
        $sanitized = [
            'nama' => htmlspecialchars(trim($request['nama'])),
            'username' => htmlspecialchars(trim($request['username'])),
            'email' => htmlspecialchars(trim($request['email'])),
            'jk' => htmlspecialchars(trim($request['jk'])),
        ];

        $user = new User();
        $user->update($sanitized, $_SESSION['user_id']);
        Response::redirect('/profile');
    }

    public function set_address()
    {
        $this->author->userAndSeller();

        $address = new Address();
        return $this->render('users/profile/set_address', [
            'title' => 'Atur Alamat',
            'addresses' => $address->findAllById('user_id', $_SESSION['user_id']),
        ]);
    }

    public function setAddressHandler(Request $request)
    {
        $address = new Address();
        $request = $request->getFormData();

        if ($request['address_id']) {
            $status = [
                'status' => 'Utama'
            ];
            $address->update(['status' => 'Bukan utama'], $_SESSION['user_id'], 'user_id');
            $address->update($status, $request['address_id']);
            Response::redirect('/atur_alamat');
            exit();
        }

        if ($request['delete_address_id']) {
            $address->delete($request['delete_address_id']);
            Response::redirect('/atur_alamat');
            exit();
        }

        $sanitized = [
            'user_id' => $_SESSION['user_id'],
            'nama_penerima' => htmlspecialchars(trim($request['nama_penerima'])),
            'telepon' => htmlspecialchars(trim($request['telepon'])),
            'nama_jalan' => htmlspecialchars(trim($request['nama_jalan'])),
            'rt_rw' => htmlspecialchars(trim($request['rt_rw'])),
            'kelurahan' => htmlspecialchars(trim($request['kelurahan'])),
            'kecamatan' => htmlspecialchars(trim($request['kecamatan'])),
            'kab_kot' => htmlspecialchars(trim($request['kab_kot'])),
            'provinsi' => htmlspecialchars(trim($request['provinsi'])),
            'kode_pos' => htmlspecialchars(trim($request['kode_pos'])),
            'status' => $request['status'] ?? 'Bukan utama'
        ];

        $address->insert($sanitized);
        Response::redirect('/atur_alamat');
    }

    public function change_password()
    {
        $this->author->userAndSeller();

        return $this->render('users/profile/change_password', [
            'title' => 'Change Password'
        ]);
    }

    public function changePasswordHandler(Request $request)
    {
        $request = $request->getFormData();
        if (password_verify($request['password'], Auth::user()['password'])) {
            if ($request['new_password'] === $request['cnfrm_password']) {
                $sanitized = [
                    'password' => password_hash(trim($request['new_password']), PASSWORD_BCRYPT)
                ];

                $user = new User();
                $user->update($sanitized, $_SESSION['user_id']);
                Response::redirect('/ganti_password');
            }
        }
    }
}
