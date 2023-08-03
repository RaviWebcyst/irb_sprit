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
            $table->string('product_name');
            $table->string('product_id');
            $table->string('product_title');
            $table->string('description');
            $table->double('price');
            $table->double('sale_price');
            $table->double('quantity')->default(0);
            $table->integer('status')->default(1);
            $table->string('main_image');
            $table->string('gallery1');
            $table->string('gallery2');
            $table->string('gallery3');
            $table->string('gallery4');
            $table->timestamps();
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
