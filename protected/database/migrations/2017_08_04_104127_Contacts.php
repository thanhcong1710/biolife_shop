<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Contacts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
         Schema::create('contacts', function($table){
                $table->increments('id')->index();
                $table->string('name');    
                $table->string('phone');               
                $table->string('email');
                $table->string('subject');
                $table->text('message');
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
        Schema::drop('contacts');
    }
}
