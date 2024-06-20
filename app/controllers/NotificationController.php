<?php

namespace App\Controllers;

use App\Middleware\Authorization;
use App\Models\Notification;
use App\Models\Store;
use Libraries\Controller;
use Libraries\Request;

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
        $notification = new Notification();

        return $this->render('users/notification', [
            'title' => 'Notifikasi Saya',
            'notification' => $notification->notification('user_id', $_SESSION['user_id'])
        ]);
    }

    public  function read_notification(Request $request)
    {
        $this->author->userAndSeller();

        $notification = new Notification();
        $store = new Store();
        $notif_id = (int)$request->getRouteParams()['notif_id'];
        $toko_id = (int)$request->getRouteParams()['toko_id'];
        return $this->render('users/read_notification', [
            'title' => 'Baca Notifikasi',
            'readNotif' => $notification->find('id', $notif_id),
            'sender' => $store->find('id', $toko_id)
        ]);
    }
}
