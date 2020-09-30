<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class Provider extends Model
{
    //
    protected $table = 'provider';
     // khai bao tham so cho delete_at
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function products()
    {
    	return $this->hasMany('App\Products','id_provider','id');
    }

    public function type_products()
    {
    	return $this->belongsTo('App\Type_Products','id_type_products','id');
    }
}
