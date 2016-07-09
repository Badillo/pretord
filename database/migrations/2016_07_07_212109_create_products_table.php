<?php

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
            $table->string('name', 100);
            $table->string('description', 255);
            $table->float('price')->default(0.0);
            $table->string('image', 150);
            $table->boolean('isOffer');
            $table->boolean('isDuo');
            $table->integer('type_id')->unsigned()->references('id')->on('types');
            $table->integer('category_id')->unsigned()->references('id')->on('categories');
            $table->integer('collection_id')->unsigned()->references('id')->on('collections');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('products');
    }
}
