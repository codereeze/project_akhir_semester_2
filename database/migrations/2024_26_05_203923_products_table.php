<?php

namespace Database\Migrations;

use Framework\QueryBuilder\Blueprint;
use Framework\QueryBuilder\Migration;
use Framework\QueryBuilder\Schema;

class ProductsTable extends Migration
{
    public function up()
    {
        Schema::create('products', function (Blueprint $attribute) {
            $attribute->id();
            $attribute->integer('toko_id');
            $attribute->integer('kategori_id');
            $attribute->varchar('nama_produk', 255, false);
            $attribute->varchar('merk', 15, false);
            $attribute->varchar('size_s', 3, false);
            $attribute->varchar('size_m', 3, false);
            $attribute->varchar('size_l', 3, false);
            $attribute->varchar('size_xl', 3, false);
            $attribute->varchar('size_xxl', 3, false);
            $attribute->varchar('stock', 5, false);
            $attribute->varchar('harga', 20, false);
            $attribute->text('deskripsi', false);

            // foreign key
            $attribute->foreign('toko_id', 'stores', 'id');
            $attribute->foreign('kategori_id', 'categories', 'id');
        });
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
}