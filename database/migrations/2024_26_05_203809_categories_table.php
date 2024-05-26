<?php

namespace Database\Migrations;

use Framework\QueryBuilder\Blueprint;
use Framework\QueryBuilder\Migration;
use Framework\QueryBuilder\Schema;

class CategoriesTable extends Migration
{
    public function up()
    {
        Schema::create('categories', function (Blueprint $attribute) {
            $attribute->id();
            $attribute->varchar('nama_kategori', 50, false);
        });
    }

    public function down()
    {
        Schema::dropIfExists('categories');
    }
}
