<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class About extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('about', function($table){
                $table->increments('id')->index();
                $table->date('year');
                $table->string('name');
                $table->string('phone');               
                $table->string('email');
                $table->string('fax');
                $table->string('website');
                $table->string('address');
                $table->text('googlemap');
                $table->string('image');
                $table->text('description');
                $table->integer('activi');

                $table->timestamps();
                $table->SoftDeletes();
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
        Schema::drop('about');
    }
}
