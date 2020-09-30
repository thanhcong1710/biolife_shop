<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends Model
{
    //
    protected $table = 'Customer';
    // khai bao tham so cho delete_at
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    public function bills()
    {
    	return $this->hasMany('App\Bills','id_customer','id');
    }

    public function bill_detail()
    {
    	return $this->hasManyThrough('App\Bill_Detail','App\Bills','id_customer','id_bills','id');
    }
}
