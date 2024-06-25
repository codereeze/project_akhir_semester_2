<?php

namespace Database\Migrations;

use Libraries\QueryBuilder\Blueprint;
use Libraries\QueryBuilder\Migration;
use Libraries\QueryBuilder\Schema;

class chatsTable extends Migration
{
    public function up()
    {
        Schema::create('chats', function (Blueprint $attribute) {
            $attribute->id();
            $attribute->integer('seller_id');
            $attribute->integer('user_id');
            $attribute->varchar('kode_chat', 10, false);
            $attribute->text('pesan', false);
            $attribute->varchar('tgl_pesan', 15, false);
        });
    }

    public function down()
    {
        Schema::dropIfExists('chats');
    }
}
