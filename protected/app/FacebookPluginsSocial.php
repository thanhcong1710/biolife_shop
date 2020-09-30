<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class FacebookPluginsSocial extends Model
{
    //
    protected $table = 'facebookpluginssocial';
    // khai bao tham so cho delete_at
     use SoftDeletes;
     protected $dates = ['deleted_at'];
}
