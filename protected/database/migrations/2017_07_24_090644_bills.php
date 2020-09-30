<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Bills extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('bills', function($table){
            $table->increments('id')->unique();
            $table->integer('id_customer')->unsigned();
            $table->foreign('id_customer')->references('id')->on('customer');
            $table->date('date_order');
            $table->integer('check_bills',1);
            $table->float('total');
            $table->string('payment', 200);
            $table->string('note', 500);
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
        Schema::drop('bills');
    }
}
