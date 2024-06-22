<?php

namespace Database\Migrations;

use Libraries\QueryBuilder\Blueprint;
use Libraries\QueryBuilder\Migration;
use Libraries\QueryBuilder\Schema;

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
            $attribute->text('cover', false);
            $attribute->enum('status_produk', ['Tersedia', 'Tidak tersedia'], 'Tersedia');

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
