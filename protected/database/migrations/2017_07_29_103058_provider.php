<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Provider extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('provider', function($table){
            $table->increments('id')->index();
            $table->integer('id_type_products')->index();
            $table->foreign('id_type_products')->references('id')->on('type_product');
            $table->string('name',100);
            $table->text('description');
            $table->string('image');
            $table->timestamps(); 
            $table->softDeletes();
        })->toSql();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::drop('provider');
    }
}
