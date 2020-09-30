<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contacts extends Model
{
    //
    	protected $table = 'contacts';
	use SoftDeletes;
	protected $dates = ['deleted_at'];
}
