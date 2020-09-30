<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class ExportDoc extends Model
{
	//protected $table = 'ExportDoc';
    // khai bao tham so cho delete_at
    use SoftDeletes;
    //

}
