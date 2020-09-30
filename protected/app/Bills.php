<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Bills extends Model
{
    //
     protected $table = 'bills';
     // khai bao tham so cho delete_at
     use SoftDeletes;
    protected $dates = ['deleted_at'];
     public function bill_detail()
     {
     	return $this->hasMany('App\Bill_Detail','id_bills','id');

     }

     public function customer()
     {
     	return $this->belongsTo('App\Customer','id_customer','id');
     }

     
}
