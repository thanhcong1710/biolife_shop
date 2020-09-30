<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Bill_Detail extends Model
{
    //
    protected $table = 'bill_detail';
    // khai bao tham so cho delete_at
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function bills()
    {
    	return $this->belongsTo('App\Bills','id_bills','id');

    }

    public function products()
    {
    	return $this->belongsTo('App\Products','id_products','id');
    }
}
