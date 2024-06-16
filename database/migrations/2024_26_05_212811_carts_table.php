<?php

namespace Database\Migrations;

use Libraries\QueryBuilder\Blueprint;
use Libraries\QueryBuilder\Migration;
use Libraries\QueryBuilder\Schema;

class CartsTable extends Migration
{
    public function up()
    {
        Schema::create('carts', function (Blueprint $attribute) {
            $attribute->id();
            $attribute->integer('user_id');
            $attribute->integer('produk_id');
            $attribute->char('size', 3, false);
            $attribute->char('qty', 2, false);

            // foreign key
            $attribute->foreign('user_id', 'users', 'id');
            $attribute->foreign('produk_id', 'products', 'id');
        });
    }

    public function down()
    {
        Schema::dropIfExists('carts');
    }
}
