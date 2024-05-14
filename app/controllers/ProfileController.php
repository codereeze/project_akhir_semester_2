<?php

namespace App\Controllers;

use Framework\Controller;

class ProfileController extends Controller
{
    public function profile()
    {
        return $this->render('users/profile/profile', [
            'title' => 'Profile'
        ]);
    }

    public function set_address()
    {
        return $this->render('users/profile/set_address', [
            'title' => 'Atur Alamat'
        ]);
    }

    public function change_password()
    {
        return $this->render('users/profile/change_password', [
            'title' => 'Change Password'
        ]);
    }
}
