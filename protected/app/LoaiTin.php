<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class LoaiTin extends Model
{
    //
    protected $table = 'loaitin';
    // khai bao tham so cho delete_at
     use SoftDeletes;
     protected $dates = ['deleted_at'];

     public function news()
     {
     	return $this->hasMany('App\News','idLoaiTin','id');
     }

     public function theloai()
     {
     	return $this->belongsTo('App\TheLoai','idTheLoai','id');
     }

}
