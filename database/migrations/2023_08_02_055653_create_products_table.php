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
            $table->string('main_image')->nullable();
            $table->string('gallery1')->nullable();
            $table->string('gallery2')->nullable();
            $table->string('gallery3')->nullable();
            $table->string('gallery4')->nullable();
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
