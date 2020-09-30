<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Menu extends Model
{
   	//
    	protected $table = 'menu';
	use SoftDeletes;
	protected $dates = ['deleted_at'];

	public function theloaimenu()
	{
		return $this->belongsTo('App\TheLoaiMenu','id_theloaimenu','id');
	}
}
