<?php

namespace Database\Migrations;

use Framework\QueryBuilder\Blueprint;
use Framework\QueryBuilder\Migration;
use Framework\QueryBuilder\Schema;

class UsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $attribute) {
            $attribute->id();
            $attribute->varchar('username', 15, false);
            $attribute->varchar('nama', 255, false);
            $attribute->enum('jk', ['Laki-laki', 'Perempuan']);
            $attribute->varchar('email', 50, false, true);
            $attribute->char('telepon', 15, false, true);
            $attribute->varchar('password', 255, false);
            $attribute->text('foto_profile', false);
            $attribute->enum('role', ['Admin', 'Seller', 'User'], 'User');
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
}
