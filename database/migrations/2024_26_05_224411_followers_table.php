<?php

namespace Database\Migrations;

use Libraries\QueryBuilder\Blueprint;
use Libraries\QueryBuilder\Migration;
use Libraries\QueryBuilder\Schema;

class FollowersTable extends Migration
{
    public function up()
    {
        Schema::create('followers', function (Blueprint $attribute) {
            $attribute->id();
            $attribute->integer('toko_id');
            $attribute->integer('user_id');

            // foreign key
            $attribute->foreign('toko_id', 'stores', 'id');
            $attribute->foreign('user_id', 'users', 'id');
        });
    }

    public function down()
    {
        Schema::dropIfExists('followers');
    }
}
