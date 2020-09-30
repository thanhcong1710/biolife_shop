<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Common; // or App\Helpers\Common; có 2 các truyền vào thư viện dựa vào mảng aliases[] trong app.php

use App\Bill_Detail;

use App\Bills;

class ExportExcelController extends Controller
{
    //
    
    function __construct()
    {    	
    	
    }
    public function getBanChay()
    {    	
    	$com = new Common;
    	#$sheet->getCellByColumnAndRow('A','4')->getValue();->get value in file
    	#create new opject excel if not file template
    	#$createOpjectExcel = $com->createOpjectExcelNew([0=>'Sheet0',1=>'Sheet1',2=>'Sheet2',3=>'Sheet3']);
    	$createOpjectExcel = $com->createOpjectExcel(resource_path('template_export/excel/banchay.xls'),[0=>'BanChay']);
    	#set index sheet
	$sheet = $createOpjectExcel[0];
	#binding data
	$array_colnum = ['A','B','C','D','E','F','G','H','I'];
	$row_start = 5;
      	$products_banchay = Bill_Detail::orderBy('quantity','ESC')->take(20)->get();
      	$stt = 1;
      	foreach ($products_banchay as  $value) 
      	{
      		$sheet->setCellValue($array_colnum[0].$row_start,$stt);
      		$sheet->setCellValue($array_colnum[1].$row_start,$value->products->name);
      		$sheet->setCellValue($array_colnum[2].$row_start,$value->products->type_products->name);
      		$sheet->setCellValue($array_colnum[3].$row_start,isset($value->products->provider->name)?$value->products->provider->name:'');
      		$sheet->setCellValue($array_colnum[4].$row_start,$value->products->quantity);
      		$sheet->setCellValue($array_colnum[5].$row_start,$value->products->quantity-$value->quantity);
      		$sheet->setCellValue($array_colnum[6].$row_start,$value->products->in_price);
      		$sheet->setCellValue($array_colnum[7].$row_start,$value->products->unit_price);
      		$sheet->setCellValue($array_colnum[8].$row_start,$value->products->promotion_price);
      		$stt = $stt+1;
      		$row_start = $row_start+1;      		
      	}
	#End binding data
      #function exportFileExcel(objPHPExcel,fileType,$filename)
	$com->exportFileExcel($createOpjectExcel['objPHPExcel'],$createOpjectExcel['fileType'],time().'banchay');	
	
    }

    public function getBills()
    {
    	$com = new Common;    	
    	$createOpjectExcel = $com->createOpjectExcel(resource_path('template_export/excel/bills.xls'),[0=>'Bills']);
    	#set index sheet
	$sheet = $createOpjectExcel[0];
	#binding data	
	$array_colnum = ['A','B','C','D','E','F','G','H','I'];
	$row_start = 5;
      	$bills = Bills::all();
      	$stt = 1;
      	foreach ($bills as  $value) 
      	{
      		$sheet->setCellValue($array_colnum[0].$row_start,$stt);
      		$sheet->setCellValue($array_colnum[1].$row_start,$value->customer->name);
      		$sheet->setCellValue($array_colnum[2].$row_start,date("d/m/y", strtotime($value->date_order)));
      		$sheet->setCellValue($array_colnum[3].$row_start,number_format($value->total));
      		$sheet->setCellValue($array_colnum[4].$row_start,$value->payment);
      		$sheet->setCellValue($array_colnum[5].$row_start,$value->note);
      		$sheet->setCellValue($array_colnum[6].$row_start,($value->check_bills==1)?'ĐC':'C');
      		$stt = $stt+1;
      		$row_start = $row_start+1;      		
      	}
	#End binding data
	$com->exportFileExcel($createOpjectExcel['objPHPExcel'],$createOpjectExcel['fileType'],time().'Bills');	
    }




}
