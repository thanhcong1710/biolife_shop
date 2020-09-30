<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Customer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('customer', function($table){
            $table->increments('id')->unique();
            $table->string('name', 100);
            $table->string('gender', 10);
            $table->string('email', 50);
            $table->string('address', 100);
            $table->string('phone', 20);
            $table->string('note');
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
        Schema::drop('custome');
    }
}
