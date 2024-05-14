<?php

namespace App\Controllers;

use Framework\Controller;

class NotificationController extends Controller
{
    public function notification()
    {
        return $this->render('users/notification', [
            'title' => 'Notifikasi Saya'
        ]);
    }

    public  function read_notification()
    {
        return $this->render('users/read_notification', [
            'title' => 'Baca Notifikasi'
        ]);
    }
}
