<?php

namespace Database\Migrations;

use Libraries\QueryBuilder\Blueprint;
use Libraries\QueryBuilder\Migration;
use Libraries\QueryBuilder\Schema;

class CommentsTable extends Migration
{
    public function up()
    {
        Schema::create('comments', function (Blueprint $attribute) {
            $attribute->id();
            $attribute->integer('user_id');
            $attribute->integer('produk_id');
            $attribute->integer('trans_id');
            $attribute->text('gambar');
            $attribute->char('rating', 2, false);
            $attribute->text('komentar', false);
            $attribute->varchar('tanggal', 20, false);

            // foreign key
            $attribute->foreign('user_id', 'users', 'id');
            $attribute->foreign('trans_id', 'transactions', 'id');
            $attribute->foreign('produk_id', 'products', 'id');
        });
    }

    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
