<?php

namespace Database\Migrations;

use Framework\QueryBuilder\Blueprint;
use Framework\QueryBuilder\Migration;
use Framework\QueryBuilder\Schema;

class CommentsTable extends Migration
{
    public function up()
    {
        Schema::create('comments', function (Blueprint $attribute) {
            $attribute->id();
            $attribute->integer('user_id');
            $attribute->integer('produk_id');
            $attribute->text('gambar');
            $attribute->text('komentar', false);

            // foreign key
            $attribute->foreign('user_id', 'users', 'id');
            $attribute->foreign('produk_id', 'products', 'id');
        });
    }

    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
