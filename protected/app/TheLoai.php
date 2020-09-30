<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class TheLoai extends Model
{
    //
     protected $table = 'theloai';
    // khai bao tham so cho delete_at
     use SoftDeletes;
     protected $dates = ['deleted_at'];

     public function loaitin()
     {
     	return $this->hasMany('App\loaitin','idTheLoai','id');
     }

     public function news()
     {
     	return $this->hasManyThrough('App\News','App\LoaiTin','idTheLoai','idLoaiTin','id');
     }
}
