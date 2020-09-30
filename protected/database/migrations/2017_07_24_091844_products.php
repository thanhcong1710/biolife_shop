<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Products extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('products', function($table){
            $table->increments('id');
            $table->string('name', 100);
            $table->integer('id_type_products')->unsigned();
            $table->foreign('id_type_products')->references('id')->on('type_products');
            $table->integer('id_provider')->unsigned();
            $table->foreign('id_provider')->references('id')->on('provider');
            $table->text('description');
            $table->float('in_price');
            $table->integer('quantity');
            $table->integer('quantity_sold')->nullable();
            $table->float('unit_price');
            $table->float('promotion_price');
            $table->string('image');
            $table->string('unit');
            $table->string('new', 4);

            $table->text('comments')->nullable();               
            $table->text('like_button')->nullable();        
            $table->text('share_button')->nullable();        
            $table->text('send_button')->nullable();        
            $table->text('follow_button')->nullable();
            
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
        //
        Schema::drop('products');
    }
}
