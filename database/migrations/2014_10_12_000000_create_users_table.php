<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
<<<<<<< HEAD
            $table->timestamp('email_verified_at')->nullable();
            $table->boolean('is_admin')->nullable();

            $table->string('password');
=======
            $table->string('phone')->unique()->nullable();
            $table->string('uid')->nullable();
            $table->string('spid')->nullable();
            $table->string('package')->nullable();
            $table->bigInteger('enable')->default(0);
            $table->bigInteger('is_enabled')->default(0);
            $table->timestamp('email_verified_at')->nullable();
            $table->boolean('is_admin')->nullable();
            $table->string('password');
            $table->string('showPass')->nullable();
            $table->string('paid_date')->nullable();
>>>>>>> 2176a109c70b61d8e7618e17d75440b582ce73ee
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
