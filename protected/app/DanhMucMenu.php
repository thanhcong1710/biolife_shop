<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DanhMucMenu extends Model
{
    //
    protected $table = 'danhmucmenu';
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function theloaimenu()
    {
    	return $this->hasMany('App\TheLoaiMenu','id_danhmucmenu','id');
    }

}
