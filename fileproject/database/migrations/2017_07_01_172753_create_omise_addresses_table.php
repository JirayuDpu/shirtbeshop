<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOmiseAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('omise_addresses', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('address');
            $table->integer('zip');
            $table->string('source')->nullable();
            $table->string('amount');
            $table->string('phone');
            $table->integer('order_id')->nullable();
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
        Schema::dropIfExists('omise_addresses');
    }
}
