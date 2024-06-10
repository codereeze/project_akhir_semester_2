<?php

namespace Database\Migrations;

use Libraries\QueryBuilder\Blueprint;
use Libraries\QueryBuilder\Migration;
use Libraries\QueryBuilder\Schema;

class ProductImagesTable extends Migration
{
    public function up()
    {
        Schema::create('product_images', function (Blueprint $attribute) {
            $attribute->id();
            $attribute->integer('produk_id');
            $attribute->text('gambar', false);

            // foreign key
            $attribute->foreign('produk_id', 'products', 'id');
        });
    }

    public function down()
    {
        Schema::dropIfExists('product_images');
    }
}
