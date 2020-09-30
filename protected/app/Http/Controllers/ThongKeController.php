<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Bill_Detail;

use Cache;

class ThongKeController extends Controller
{
    //
    function getBanChay()
    {
    	$products_banchay = Bill_Detail::orderBy('quantity','ESC')->paginate(10); 
    	
   	return view('admin.thongke.banchay',['products_banchay'=>$products_banchay]);
    }
}
