<?php

namespace Database\Migrations;

use Framework\QueryBuilder\Blueprint;
use Framework\QueryBuilder\Migration;
use Framework\QueryBuilder\Schema;

class AddressesTable extends Migration
{
    public function up()
    {
        Schema::create('addresses', function (Blueprint $attribute) {
            $attribute->id();
            $attribute->integer('user_id');
            $attribute->varchar('nama_penerima', 255, false);
            $attribute->char('telepon', 15, false);
            $attribute->text('nama_jalan', false);
            $attribute->varchar('rt_rw', 10, false);
            $attribute->varchar('kelurahan', 30, false);
            $attribute->varchar('kecamatan', 30, false);
            $attribute->varchar('kab_kot', 30, false);
            $attribute->varchar('provinsi', 30, false);
            $attribute->char('kode_pos', 7, false);
            $attribute->enum('status', ['Utama', 'Bukan utama'], 'Bukan utama');

            // foreign key
            $attribute->foreign('user_id', 'users', 'id');
        });
    }

    public function down()
    {
        Schema::dropIfExists('addresses');
    }
}
