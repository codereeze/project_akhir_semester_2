<?php

namespace Database\Migrations;

use Libraries\QueryBuilder\Blueprint;
use Libraries\QueryBuilder\Migration;
use Libraries\QueryBuilder\Schema;

class UsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $attribute) {
            $attribute->id();
            $attribute->varchar('username', 15, false);
            $attribute->varchar('nama', 255, false);
            $attribute->enum('jk', ['Laki-laki', 'Perempuan', 'Belum diatur'], 'Belum diatur');
            $attribute->varchar('email', 255, false, true);
            $attribute->text('password', true);
            $attribute->text('foto_profile', true);
            $attribute->enum('role', ['Admin', 'Seller', 'User'], 'User');
            $attribute->enum('status_user', ['Aktif', 'Diblokir'], 'Aktif');
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
}
