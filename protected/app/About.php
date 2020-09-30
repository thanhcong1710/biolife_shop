<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class About extends Model
{
    //
    protected $table = 'about';
    use SoftDeletes;
    protected $dates = ['deleted_at'];
}
