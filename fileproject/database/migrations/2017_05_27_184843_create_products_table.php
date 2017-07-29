<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('pro_name');
            $table->string('quantity');
            $table->string('cost');
            $table->string('price');
            $table->string('image')->nullable();
            $table->string('description');
            $table->string('category_id');
            $table->string('sizes_id');
            $table->string('colors_id');
            $table->integer('discount')->nullable();
            $table->string('promotion_id')->nullable();
            $table->string('recommend_id')->nullable();
            $table->tinyInteger('promotion_new_id')->nullable();
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
