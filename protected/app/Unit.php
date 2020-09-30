<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class Unit extends Model
{
    //
    protected $table = 'unit';
    // khai bao tham so cho delete_at
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    public function products()
	 {
	    return $this->hasMany('App\Products','unit','id');
	 }
    
}
