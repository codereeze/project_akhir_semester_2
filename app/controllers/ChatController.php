<?php

namespace App\Controllers;

use App\Middleware\Authorization;
use Libraries\Controller;

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

        return $this->render('chat', [
            'title' => 'Chat Penjual',
        ]);
    }
}
