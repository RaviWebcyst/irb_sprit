<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWalletsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wallets', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("userId")->nullable();
            $table->string("user_id")->nullable();
            $table->bigInteger("amount")->nullable();
            $table->string("type")->nullable();
            $table->string("from")->nullable();
            $table->string("wallet_type")->nullable();
            $table->string("transaction_type")->nullable();
            $table->bigInteger("level")->nullable();
            $table->bigInteger("package_id")->nullable();
            $table->string("description")->nullable();
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
        Schema::dropIfExists('wallets');
    }
}
