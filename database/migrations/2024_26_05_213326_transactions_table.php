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
            $attribute->integer('toko_id');
            $attribute->integer('alamat_id');
            $attribute->char('no_pesanan', 30, false);
            $attribute->char('size', 3, false, true);
            $attribute->char('qty', 2, false);
            $attribute->varchar('estimasi', 30, false);
            $attribute->text('catatan_kurir', false);
            $attribute->varchar('pengiriman', 30, false);
            $attribute->varchar('pembayaran', 20, false);
            $attribute->varchar('total_harga', 20, false);
            $attribute->enum('status_pengiriman', ['Dalam antrian', 'Dikirim', 'Selesai', 'Sudah diulas'], 'Dalam antrian');

            // foreign key
            $attribute->foreign('user_id', 'users', 'id');
            $attribute->foreign('produk_id', 'products', 'id');
            $attribute->foreign('alamat_id', 'addresses', 'id');
            $attribute->foreign('toko_id', 'stores', 'id');
        });
    }

    public function down()
    {
        Schema::dropIfExists('transactions');
    }
}
