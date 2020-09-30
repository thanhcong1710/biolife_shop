<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FacebookPluginsSocial extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('facebookpluginssocial', function($table){
                $table->increments('id')->index();
                $table->text('sdk_javascript');    
                $table->text('googlemap')->nullable();
                $table->text('chatonline')->nullable();
                
                $table->text('comments')->nullable();               
                $table->text('like_button')->nullable();        
                $table->text('share_button')->nullable();        
                $table->text('send_button')->nullable();        
                $table->text('follow_button')->nullable();

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
        Schema::drop('facebookpluginssocial');
    }
}
