<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Products extends Model
{
    //
     protected $table = 'products';
     // khai bao tham so cho delete_at
     use SoftDeletes;
    protected $dates = ['deleted_at'];
     public function bill_detail()
     {
     	return $this->hasMany('App\Bill_Detail','id_products','id');

     }
     public function type_products()
     {
     	return $this->belongsTo('App\Type_Products','id_type_products','id');
     }

     public function provider()
     {
        return $this->belongsTo('App\Provider','id_provider','id');
     }

     public function unit_()
     {
        return $this->belongsTo('App\Unit','unit','id');
     }
}
