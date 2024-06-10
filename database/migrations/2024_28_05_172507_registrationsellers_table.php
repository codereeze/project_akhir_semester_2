<?php

namespace Database\Migrations;

use Libraries\QueryBuilder\Blueprint;
use Libraries\QueryBuilder\Migration;
use Libraries\QueryBuilder\Schema;

class RegistrationSellersTable extends Migration
{
    public function up()
    {
        Schema::create('registration_sellers', function (Blueprint $attribute) {
            $attribute->id();
            $attribute->integer('user_id');
            $attribute->varchar('nama_pemilik', 255, false);
            $attribute->varchar('nama_toko', 255, false);
            $attribute->text('foto_diri', false);
            $attribute->text('foto_ktp', false);
            $attribute->text('foto_toko');
            $attribute->text('foto_produk', false);
            $attribute->enum('status', ['Menunggu persetujuan', 'Disetujui', 'Ditolak'], 'Menunggu persetujuan');

            // foreign key
            $attribute->foreign('user_id', 'users', 'id');
        });
    }

    public function down()
    {
        Schema::dropIfExists('registration_sellers');
    }
}
