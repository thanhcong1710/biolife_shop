<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TheLoaiMenu extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('theloaimenu', function (Blueprint $table) {
            $table->increments('id')->index();
            $table->integer('id_danhmucmenu')->unsigned();
            $table->foreign('id_danhmucmenu')->references('id')->on('danhmucmenu');
            $table->string('name');
            $table->string('route')->nullable();
            $table->string('path')->nullable();
            $table->string('action')->nullable();
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
        Schema::drop('theloaimenu');
    }
}
