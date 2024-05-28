<?php

namespace App\Controllers;

use App\Models\Address;
use App\Models\User;
use Framework\Controller;
use Framework\Request;
use Framework\Response;

class ProfileController extends Controller
{
    public function profile()
    {
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
            'telepon' => htmlspecialchars(trim($request['telepon'])),
            'jk' => htmlspecialchars(trim($request['jk'])),
        ];

        $user = new User();
        $user->update($sanitized, $_SESSION['user_id']);
        Response::redirect('/profile');
    }

    public function set_address()
    {
        return $this->render('users/profile/set_address', [
            'title' => 'Atur Alamat'
        ]);
    }

    public function setAddressHandler(Request $request)
    {
        $request = $request->getFormData();
        $sanitized = [
            'user_id' => $_SESSION['user_id'],
            'nama_jalan' => htmlspecialchars(trim($request['nama_jalan'])),
            'rt_rw' => htmlspecialchars(trim($request['rt_rw'])),
            'kelurahan' => htmlspecialchars(trim($request['kelurahan'])),
            'kecamatan' => htmlspecialchars(trim($request['kecamatan'])),
            'kabupaten' => htmlspecialchars(trim($request['kabupaten'])),
            'provinsi' => htmlspecialchars(trim($request['provinsi'])),
            'kode_pos' => htmlspecialchars(trim($request['kode_pos']))
        ];

        $address = new Address();
        $address->insert($sanitized);
        Response::redirect('/atur_alamat');
    }

    public function change_password()
    {
        return $this->render('users/profile/change_password', [
            'title' => 'Change Password'
        ]);
    }
}
