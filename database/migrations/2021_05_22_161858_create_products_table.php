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
            $table->string('product_description');
            $table->bigInteger('category_id')->unsigned();
            $table->bigInteger('sub_category_id')->unsigned();
            $table->integer('quantity');
            $table->bigInteger('price');
            $table->string('image');
            $table->string('size')->nullable();
            $table->integer('discount');
            $table->timestamps();

            $table->foreign('category_id')
            ->references('id')
            ->on('categories');
            
            $table->foreign('sub_category_id')
            ->references('id')
            ->on('sub_categories');
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
