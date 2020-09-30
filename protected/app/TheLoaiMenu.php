<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TheLoaiMenu extends Model
{
    //
    protected $table = 'theloaimenu';
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function menu()
    {
    	return $this->hasMany('App\Menu','id_theloaimenu','id');
    }

    public function danhmucmenu()
    {
    	return $this->belongsTo('App\DanhMucMenu','id_danhmucmenu','id');
    }
}
