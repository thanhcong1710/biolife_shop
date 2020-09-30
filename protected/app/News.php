<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class News extends Model
{
    //
 protected $table = 'news';
 // khai bao tham so cho delete_at
 use SoftDeletes;
 protected $dates = ['deleted_at'];

   public function loaitin()
   {
   	return $this->belongsTo('App\LoaiTin','idLoaiTin','id');
   }

   public function comment()
   {
   	return $this->hasMany('App\Comment','idNews','id');
   }
}
