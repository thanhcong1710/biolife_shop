<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;


class Slide extends Model
{
    //
    protected $table = 'slide';
    // khai bao su dung delete_at
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    static function test()
    {
    	dd('test');
    }
}
