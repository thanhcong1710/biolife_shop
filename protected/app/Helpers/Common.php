<?php

namespace App\Helpers;
#composer require phpoffice/phpexcel - ---insert liblary phpexxcel
use PHPExcel; 
use PHPExcel_IOFactory;

class Common
{
	
    	public static function changeTitle($str,$strSymbol='-',$case=MB_CASE_LOWER)
    	{
		$str=trim($str);
		if ($str=="") return "";
		$str =str_replace('"','',$str);
		$str =str_replace("'",'',$str);
		$str = stripUnicode($str);
		$str = mb_convert_case($str,$case,'utf-8');
		$str = preg_replace('/[\W|_]+/',$strSymbol,$str);
		return $str;
	}
	#function createOpjectExcel hỗ trợ khởi tạo các đối tượng excel
	#$path - đường dẫn file mẫu
	#$SheetIndex - sheet cần đẩy dữ liệu ra - có kiểu giá trị là mảng và các phần tử là chỉ số sheet ứng với key mảng, và giá trị của phần tử ứng với tên sheeet
	#$SheetIndex mảng rỗng hiểu là sheet(0)
	#kết quả trả về $sheet[indexsheet],$sheet[objPHPExcel],objPHPExcel[fileType]
	public  function createOpjectExcel($path,$SheetIndex)
	{
		if (file_exists($path) && is_array($SheetIndex)) 
		{
			$sheet = array();
			$fileType = \PHPExcel_IOFactory::identify($path);
	    		// đọc loại file template
			// hoặc $objReader = \PHPExcel_IOFactory::createReader('Excel5'); excel 2003    	
			$objReader = \PHPExcel_IOFactory::createReader($fileType);
			$objPHPExcel = $objReader->load($path); //load dữ liệu 
			if (count($SheetIndex) == 0) 
			{
				$objPHPExcel->setActiveSheetIndex(0);
				$sheet[0] = $objPHPExcel->getActiveSheet();
			}
			else
			{
				foreach ($SheetIndex as $key => $value) 
				{
					$objPHPExcel->setActiveSheetIndex($key)->setTitle($value);
					$sheet[$key] = $objPHPExcel->getActiveSheet();
				}
			}
			$sheet['objPHPExcel'] = $objPHPExcel;
			$sheet['fileType'] = $fileType;
			return $sheet;

		}
		else
			return redirect()->back();
		
	}
	#$SheetIndex - sheet cần đẩy dữ liệu ra - có kiểu giá trị là mảng và các phần tử là chỉ số sheet ứng với key mảng, và giá trị của phần tử ứng với tên sheeet
	#$SheetIndex mảng rỗng hiểu là sheet(0)
	#kết quả trả về $sheet[indexsheet],$sheet[objPHPExcel],objPHPExcel[fileType]
	public  function createOpjectExcelNew($SheetIndex)
	{
		$objPHPExcel = new PHPExcel();
		$sheet = array();
		if (isset($SheetIndex) && is_array($SheetIndex) && count($SheetIndex)>0) 
		{
			foreach ($SheetIndex as $key => $value) 
			{
				$objPHPExcel->createSheet($key)->setTitle($value);
				$objPHPExcel->setActiveSheetIndex($key);
				$sheet[$key] = $objPHPExcel->getActiveSheet();
			}
		}
		elseif (!isset($SheetIndex)) 
		{
			$objPHPExcel->setActiveSheetIndex(0);
			$sheet[0] = $objPHPExcel->getActiveSheet();
		}	

		$sheet['objPHPExcel'] = $objPHPExcel;
		$sheet['fileType'] = 'Excel5';
		return $sheet;	
	}

	public function exportFileExcel($objPHPExcel,$fileType,$filename)
	{

		if (isset($objPHPExcel) && $fileType != '' && $filename != '') 
		{
			header('Content-Type: application/vnd.ms-excel');

			header('Content-Disposition: attachment;filename="' .  $filename  . '.xls"');

			header('Cache-Control: max-age=0');

			$objWriter = \PHPExcel_IOFactory::createWriter($objPHPExcel, $fileType);
			$objWriter->save('php://output');
		}
		else
			return redirect()->back();
		
	}

 }
?>