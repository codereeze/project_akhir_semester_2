<?php

namespace Database\Migrations;

use Framework\QueryBuilder\Blueprint;
use Framework\QueryBuilder\Migration;
use Framework\QueryBuilder\Schema;

class ProductImagesTable extends Migration
{
    public function up()
    {
        Schema::create('productimages', function (Blueprint $attribute) {
            $attribute->id();
            $attribute->integer('produk_id');
            $attribute->text('gambar', false);

            // foreign key
            $attribute->foreign('produk_id', 'products', 'id');
        });
    }

    public function down()
    {
        Schema::dropIfExists('productimages');
    }
}
