<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\ExportDoc;
use PHPRtfLite;
use Common;
class ExportDocController extends Controller
{  
	
     public function getDemo(){
     	PHPRtfLite::registerAutoloader();
    	$rtf = new PHPRtfLite();	    	
	$sect = $rtf->addSection();
	$sect->writeText('<b>CÁC THÀNH VIÊN ĐOÀN ĐÁNH GIÁ NGOÀI</b>');
	$uploaddir = base_path().'/save'; 
	$rtf->save($uploaddir.'/demo123456.doc');	exit('OK');
    }

}
