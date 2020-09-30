<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DanhMucMenu extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('danhmucmenu', function (Blueprint $table) {
            $table->increments('id')->index();
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
        Schema::drop('danhmucmenu');
    }
}
