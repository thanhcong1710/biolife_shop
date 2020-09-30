<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Menu extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('menu', function (Blueprint $table) {
            $table->increments('id')->index();
            $table->integer('id_theloaimenu')->unsigned();
            $table->foreign('id_theloaimenu')->references('id')->on('theloaimenu');
            $table->string('name');
            $table->string('route');
            $table->string('path');           
            $table->string('action');   
            $table->integer('show');                
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
        Schema::drop('menu');
    }
}
