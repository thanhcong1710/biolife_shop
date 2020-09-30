<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Type_Products extends Model
{
    //
    protected $table = 'type_products';
    // khai bao tham so cho delete_at
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function products()
    {
    	return $this->hasMany('App\Products','id_type_products','id');
    }

    static  function getDanhSach()
    {
    	return $type_products = Type_Products::all();
    }
    static  function getDanhSachByID($id)
    {
    	return $type_products = Type_Products::find($id);
    }



}
