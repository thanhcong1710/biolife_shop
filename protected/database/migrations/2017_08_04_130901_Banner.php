<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Banner extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('banner', function($table){
            $table->increments('id');
            $table->string('name');
            $table->string('image');
            $table->string('content');
            $table->string('link');
            $table->string('type');#0:Top,1:Top-left,2:left,3:right            
            $table->integer('activi');#0:disable, 1:activi
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
        Schema::drop('banner');
    }
}
