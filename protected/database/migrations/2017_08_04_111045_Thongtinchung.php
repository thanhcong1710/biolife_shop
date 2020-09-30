<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Thongtinchung extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('thongtinchung', function($table){
                $table->increments('id')->index();
                $table->string('name');    
                $table->string('phone');               
                $table->string('email');
                $table->string('fax');
                $table->string('website');
                $table->string('address');
                $table->text('googlemap')->nullable();
                $table->text('chatonline')->nullable();
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
        Schema::drop('thongtinchung');
    }
}
