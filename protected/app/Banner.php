<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Banner extends Model
{
    //
    protected $table = 'banner';
    // khai bao su dung delete_at
    use SoftDeletes;
    protected $dates = ['deleted_at'];
}
