<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Comment extends Model
{
    //
	protected $table = 'comment';
	use SoftDeletes;
	protected $dates = ['deleted_at'];

	public function news()
	{
		return $this->belongsTo('App\news','idNews','id');
	}
	public function products()
	{
		return $this->belongsTo('App\Products','idProducts','id');
	}
}
