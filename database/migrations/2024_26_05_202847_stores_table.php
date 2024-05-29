<?php

namespace Database\Migrations;

use Framework\QueryBuilder\Blueprint;
use Framework\QueryBuilder\Migration;
use Framework\QueryBuilder\Schema;

class StoresTable extends Migration
{
    public function up()
    {
        Schema::create('stores', function (Blueprint $attribute) {
            $attribute->id();
            $attribute->integer('seller_id');
            $attribute->varchar('nama_toko', 50, false);
            $attribute->varchar('copywriting', 255, false);
            $attribute->varchar('jam_buka', 5, false);
            $attribute->varchar('jam_tutup', 5, false);
            $attribute->varchar('tahun_bergabung', 4, false);
            $attribute->text('deskripsi', false);
            $attribute->text('nama_jalan', false);
            $attribute->varchar('rt_rw', 10, false);
            $attribute->varchar('kelurahan', 30, false);
            $attribute->varchar('kecamatan', 30, false);
            $attribute->varchar('kab_kot', 30, false);
            $attribute->varchar('provinsi', 30, false);
            $attribute->char('kode_pos', 7, false);   
            
            // foreign key
            $attribute->foreign('seller_id', 'users', 'id');
        });
    }

    public function down()
    {
        Schema::dropIfExists('stores');
    }
}
