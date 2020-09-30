<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BillDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('bill_detail', function($table){
            $table->increments('id')->index();
            $table->integer('id_bills');
            $table->foreign('id_bills')->references('id')->on('bills');
            $table->integer('id_products');
            $table->foreign('id_products')->references('id')->on('products');
            $table->integer('quantity');
            $table->double('unit_price');
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
        Schema::drop('bill_detail');
    }
}
