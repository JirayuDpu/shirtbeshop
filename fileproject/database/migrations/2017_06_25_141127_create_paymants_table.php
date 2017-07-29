<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paymants', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('address');
            $table->integer('zip');
            $table->string('source')->nullable();
            $table->string('bank_admin_id')->nullable();
            $table->string('bank_user');
            $table->string('amount');
            $table->string('image');
            $table->string('phone');
            $table->integer('order_id');
            $table->tinyInteger('confirm');
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
        Schema::dropIfExists('paymants');
    }
}
