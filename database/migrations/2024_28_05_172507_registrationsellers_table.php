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
            $attribute->char('nik', 25, false);
            $attribute->char('telepon', 15, false);
            $attribute->varchar('nama_jalan', 50, false);
            $attribute->varchar('rt_rw', 10, false);
            $attribute->varchar('kelurahan', 30, false);
            $attribute->varchar('kecamatan', 30, false);
            $attribute->varchar('kab_kot', 30, false);
            $attribute->varchar('provinsi', 30, false);
            $attribute->char('kode_pos', 20, false);
            $attribute->varchar('nama_toko', 255, false);
            $attribute->varchar('jam_buka', 20, false);
            $attribute->varchar('jam_tutup', 20, false);
            $attribute->text('deskripsi', false);
            $attribute->text('foto_diri', false);
            $attribute->text('foto_ktp', false);
            $attribute->text('foto_toko_produk', false);
            $attribute->enum('status', ['Menunggu persetujuan', 'Disetujui', 'Ditolak', 'Ditolak permanen'], 'Menunggu persetujuan');

            // foreign key
            $attribute->foreign('user_id', 'users', 'id');
        });
    }

    public function down()
    {
        Schema::dropIfExists('registration_sellers');
    }
}
