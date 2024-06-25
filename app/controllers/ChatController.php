<?php

namespace App\Controllers;

use App\Middleware\Authorization;
use App\Models\Chat;
use App\Models\User;
use Carbon\Carbon;
use Libraries\Controller;
use Libraries\Request;
use Libraries\Response;

class ChatController extends Controller
{
    private Authorization $author;

    public function __construct()
    {
        $this->author = new Authorization();
    }

    public function chat_seller()
    {
        $this->author->userAndSeller();

        $chat = new Chat();
        $user = new User();
        $role = $user->find('id', $_SESSION['user_id'])['role'];

        if ($role == 'User') {
            $contacts = $chat->pluckChats('user_id', $_SESSION['user_id']);
        } else {
            $contacts = $chat->pluckChats('seller_id', $_SESSION['user_id']);
        }

        return $this->render('chat', [
            'title' => 'Chat Penjual',
            'contacts' => $contacts,
            'user' => function ($seller_id, $user_id) {
                $user = new User();
                $role = $user->find('id', $_SESSION['user_id'])['role'];

                if ($role == 'User') {
                    return $user->find('id', $seller_id);
                } else {
                    return $user->find('id', $user_id);
                }
            }
        ]);
    }

    public function read_chat(Request $request)
    {
        $this->author->userAndSeller();

        $chat = new Chat();
        $chat_id = $request->getRouteParams()['id'];
        $kode_chat = $chat->find('id', $chat_id)['kode_chat'];
        if (!$kode_chat) {
            Response::redirect('/chat-penjual');
        }

        $user = new User();
        $role = $user->find('id', $_SESSION['user_id'])['role'];

        if ($role == 'User') {
            $contacts = $chat->pluckChats('user_id', $_SESSION['user_id']);
        } else {
            $contacts = $chat->pluckChats('seller_id', $_SESSION['user_id']);
        }

        return $this->render('read_chat', [
            'title' => 'Baca Chat Penjual',
            'dataChat' => $chat->find('id', $chat_id),
            'contacts' => $contacts,
            'chats' => $chat->findAllWhere('kode_chat', $kode_chat),
            'user' => function ($seller_id, $user_id) {
                $user = new User();
                $role = $user->find('id', $_SESSION['user_id'])['role'];

                if ($role == 'User') {
                    return $user->find('id', $seller_id);
                } else {
                    return $user->find('id', $user_id);
                }
            },
            'infoUser' => function ($id) {
                $user = new User();
                return $user->find('id', $id);
            },
        ]);
    }

    public function sendChatHandler(Request $request)
    {
        $formData = $request->getFormData();
        $idParam = $request->getRouteParams()['id'];

        $chat = new Chat();
        Carbon::setLocale('id');
        $result = Carbon::now()->isoFormat('d MMMM');

        $sanitized = [
            'user_id' => $formData['user_id'],
            'seller_id' => $formData['seller_id'],
            'kode_chat' => $formData['kode_chat'],
            'sender' => $formData['sender'],
            'tgl_pesan' => $result,
            'pesan' => htmlspecialchars(trim($formData['pesan'])),
        ];

        $chat->insert($sanitized);
        Response::redirect("/read-chat/$idParam");
    }
}
