<?php

namespace Database\Migrations;

use Libraries\QueryBuilder\Blueprint;
use Libraries\QueryBuilder\Migration;
use Libraries\QueryBuilder\Schema;

class NotificationsTable extends Migration
{
    public function up()
    {
        Schema::create('notifications', function (Blueprint $attribute) {
            $attribute->id();
            $attribute->integer('pengirim_id');
            $attribute->integer('penerima_id');
            $attribute->varchar('judul', 100, false);
            $attribute->text('pesan', false);

            // foreign key
            $attribute->foreign('pengirim_id', 'users', 'id');
            $attribute->foreign('penerima_id', 'users', 'id');
        });
    }

    public function down()
    {
        Schema::dropIfExists('notifications');
    }
}
