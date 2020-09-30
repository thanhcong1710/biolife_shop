<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class News extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('news', function($table){
            $table->increments('id')->unique();
            $table->string('TieuDe');
            $table->string('TieuDeKhongDau');
            $table->longText('TomTat');
            $table->longText('NoiDung');
            $table->string('Hinh');
            $table->integer('NoiBat');     
            $table->integer('SoLuongXem');       
            $table->integer('idLoaiTin'); 

            $table->text('comments')->nullable();               
            $table->text('like_button')->nullable();        
            $table->text('share_button')->nullable();        
            $table->text('send_button')->nullable();        
            $table->text('follow_button')->nullable();

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
        Schema::drop('news');
    }
}
