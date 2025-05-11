<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Ürün ismi
            $table->text('description'); // Ürün açıklaması
            $table->decimal('price', 8, 2); // Fiyat (Örnek: 9999.99)
            $table->integer('stock'); // Stok miktarı
            $table->boolean('status')->default(true); // Ürün durumu (aktif/pasif)
            $table->timestamps(); // Oluşturulma ve güncellenme tarihleri
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
