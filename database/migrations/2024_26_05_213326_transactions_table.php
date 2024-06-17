<?php

namespace Database\Migrations;

use Libraries\QueryBuilder\Blueprint;
use Libraries\QueryBuilder\Migration;
use Libraries\QueryBuilder\Schema;

class TransactionsTable extends Migration
{
    public function up()
    {
        Schema::create('transactions', function (Blueprint $attribute) {
            $attribute->id();
            $attribute->integer('user_id');
            $attribute->integer('produk_id');
            $attribute->char('size', 3, false);
            $attribute->char('qty', 2, false);
            $attribute->varchar('estimasi', 30, false);
            $attribute->varchar('pengiriman', 30, false);
            $attribute->enum('status', ['Dalam antrian', 'Dikirim', 'Ulasan', 'Selesai'], 'Dalam antrian');

            // foreign key
            $attribute->foreign('user_id', 'users', 'id');
            $attribute->foreign('produk_id', 'products', 'id');
        });
    }

    public function down()
    {
        Schema::dropIfExists('transactions');
    }
}
