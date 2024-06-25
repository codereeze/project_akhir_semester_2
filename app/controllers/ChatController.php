<?php

namespace App\Controllers;

use App\Middleware\Authorization;
use App\Models\Chat;
use App\Models\User;
use Libraries\Controller;
use Libraries\Request;

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

        return $this->render('chat', [
            'title' => 'Chat Penjual',
            'contacts' => $chat->pluckChats('user_id', $_SESSION['user_id']),
            'user' => function($id){
                $user = new User();
                return $user->find('id', $id);
            }
        ]);
    }

    public function read_chat(Request $request)
    {
        $this->author->userAndSeller();

        $chat = new Chat();
        $chat_id = $request->getRouteParams()['id'];
        $kode_chat = $chat->find('id', $chat_id)['kode_chat'];

        return $this->render('read_chat', [
            'title' => 'Baca Chat Penjual',
            'contacts' => $chat->pluckChats('user_id', $_SESSION['user_id']),
            'user' => function($id){
                $user = new User();
                return $user->find('id', $id);
            },
            'chats' => $chat->findAllById('kode_chat', $kode_chat)
        ]);
    }
}
