<?php

namespace App\Controllers;

use App\Middleware\Authorization;
use Libraries\Controller;

class NotificationController extends Controller
{
    private Authorization $author;

    public function __construct()
    {
        $this->author = new Authorization();
    }

    public function notification()
    {
        $this->author->userAndSeller();

        return $this->render('users/notification', [
            'title' => 'Notifikasi Saya'
        ]);
    }

    public  function read_notification()
    {
        $this->author->userAndSeller();

        return $this->render('users/read_notification', [
            'title' => 'Baca Notifikasi'
        ]);
    }
}
