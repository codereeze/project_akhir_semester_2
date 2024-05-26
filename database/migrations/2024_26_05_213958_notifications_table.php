<?php

namespace Database\Migrations;

use Framework\QueryBuilder\Blueprint;
use Framework\QueryBuilder\Migration;
use Framework\QueryBuilder\Schema;

class NotificationsTable extends Migration
{
    public function up()
    {
        Schema::create('notifications', function (Blueprint $attribute) {
            $attribute->id();
            $attribute->integer('id_penerima');
            $attribute->varchar('pengirim', 100, false);
            $attribute->varchar('judul', 100, false);
            $attribute->text('pesan', false);

            // foreign key
            $attribute->foreign('id_penerima', 'users', 'id');
        });
    }

    public function down()
    {
        Schema::dropIfExists('notifications');
    }
}
