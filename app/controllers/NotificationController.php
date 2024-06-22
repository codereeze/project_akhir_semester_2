<?php

namespace App\Controllers;

use App\Middleware\Authorization;
use App\Models\Notification;
use App\Models\Store;
use App\Models\User;
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
            'notification' => $notification->notification('penerima_id', $_SESSION['user_id']),
            'checkSender' => function ($id) {
                $admin = new User();
                $store = new Store();
                $adminSender = $admin->find('id', $id, 'role', 'Admin');
                $storeSender = $store->find('seller_id', $id);
                if ($adminSender) {
                    return "{$adminSender['nama']} - {$adminSender['role']}";
                } elseif ($storeSender) {
                    return "{$storeSender['nama_toko']} - Seller";
                }else{
                    return null;
                }
            }
        ]);
    }

    public  function read_notification(Request $request)
    {
        $this->author->userAndSeller();

        $notification = new Notification();
        $admin = new User();
        $store = new Store();

        $notif_id = (int)$request->getRouteParams()['notif_id'];
        $pengirimID = $notification->find('id', $notif_id)['pengirim_id'];

        return $this->render('users/read_notification', [
            'title' => 'Baca Notifikasi',
            'readNotif' => $notification->find('id', $notif_id),
            'senderAdmin' => $admin->find('id', $pengirimID),
            'senderStore' => $store->find('seller_id', $pengirimID)
        ]);
    }
}
