<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Loaitin extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('LoaiTin', function($table){
                $table->increments('id')->unique();
                $table->integer('idTheLoai')->unsigned();
                $table->foreign('idTheLoai')->references('id')->on('TheLoai');
                $table->string('Ten');
                $table->string('TenKhongDau');
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
        Schema::drop('LoaiTin');
    }
}
