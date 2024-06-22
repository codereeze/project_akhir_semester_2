<?php

namespace Database\Migrations;

use Libraries\QueryBuilder\Blueprint;
use Libraries\QueryBuilder\Migration;
use Libraries\QueryBuilder\Schema;

class StoresTable extends Migration
{
    public function up()
    {
        Schema::create('stores', function (Blueprint $attribute) {
            $attribute->id();
            $attribute->integer('seller_id');
            $attribute->varchar('nama_toko', 50, false);
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
            $attribute->enum('status', ['Aktif', 'Diblokir'], 'Aktif'); 
            
            // foreign key
            $attribute->foreign('seller_id', 'users', 'id');
        });
    }

    public function down()
    {
        Schema::dropIfExists('stores');
    }
}
