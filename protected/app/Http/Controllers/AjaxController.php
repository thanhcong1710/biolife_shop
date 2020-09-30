<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\LoaiTin;

use App\TheLoai;

use App\TinTuc;

use App\Provider;

use App\Bills;

use App\Bill_Detail;

use App\TheLoaiMenu;

use DB;

use App\Products;

class AjaxController extends Controller
{
    //get list LoaiTin for form add
    public function getLoaiTin($idTheLoai)
    {
    	$loaitin = LoaiTin::where('idTheLoai',$idTheLoai)->get();
    	
    	foreach ($loaitin as $lt) 
    	{
    		echo  "<option value=".$lt->id.">".$lt->Ten."</option>";
    	}
    	
    }

    public function getDanhSachProvider(Request $request)
    {
        $Provider = Provider::where('id_type_products',$request->id_type_products)->get();
        $html = "<option value='0'>-----Nhà cung cấp -----</option>";
        foreach ($Provider as $Pro) 
        {
             $html .= "<option value=".$Pro->id.">".$Pro->name."</option>";
        }
        echo  $html;
    }

    public function getCheckBills($id,$tt)
    {
        // cập nhật số lượng hàng trong kho
        $bills_detail = Bill_Detail::where('id_bills',$id)->get();
        if($tt == 1)
        {
            $n = 0;
            $ms = "Không đủ số lượng để chuyển hàng:\n";
            foreach ($bills_detail as  $va) 
            {
                //Lấy số lượng 1 sản phẩm đến thời điểm hiện tại đã bán
                $total = Bill_Detail::join('bills', 'bills.id', '=', 'bill_detail.id_bills')->select(DB::raw("SUM(bill_detail.quantity) as count"))->where('bill_detail.id_products',$va->id_products)->where('bills.check_bills',1)->groupBy('bill_detail.id_products')->first(); 

                //Số lượng gửi đơn hàng hiện tại  $va->quantity;         
                if (count($total) >0) 
                {
                     $tong = $va->quantity + $total->count;
                }
                else 
                    $tong = $va->quantity;

                $products = Products::find($va->id_products);
                
                if($tong > $products->quantity)
                {             
                    $ms .= $products->name.": còn ".$products->quantity." sản phẩm\n";
                    $n= $n+1;
                }            
                
            }
            if ($n ==0) 
            {
                foreach ($bills_detail as  $va) 
                {
                    //Lấy số lượng 1 sản phẩm đến thời điểm hiện tại đã bán
                    $total = Bill_Detail::join('bills', 'bills.id', '=', 'bill_detail.id_bills')->select(DB::raw("SUM(bill_detail.quantity) as count"))->where('bill_detail.id_products',$va->id_products)->where('bills.check_bills',1)->groupBy('bill_detail.id_products')->first(); 
                    //Số lượng gửi đơn hàng hiện tại  $va->quantity;         
                    if (count($total) >0) 
                    {
                         $tong = $va->quantity + $total->count;
                    }
                    else 
                        $tong = $va->quantity;
                   
                    $products = Products::find($va->id_products);             
                   
                    $products->quantity_sold = $tong;

                    $products->save();  
                }

                $bills = Bills::find($id);

                $bills->check_bills = $tt;

                $bills->save();

                echo "Cập nhật thành công";
            }
            else            
            echo $ms;  
        }
        if($tt == 0)
        {
            
            foreach ($bills_detail as  $va) 
            {
                $total = Bill_Detail::select(DB::raw("SUM(quantity) as count"))->where('id_products',$va->id_products)->where('id_bills',$id)->first(); 

                $products = Products::find($va->id_products);             
               
                $products->quantity_sold = $products->quantity_sold-$total->count;

                $products->save();  
            }

            $bills = Bills::find($id);

            $bills->check_bills = $tt;

            $bills->save();

            echo "Cập nhật thành công";
        }
              
    }
    
    public function getChangeTotal($id,$soluong)
    {
            $bills_detail = Bill_Detail::find($id);
            $bandau = $bills_detail->quantity;
            $bills_detail->quantity = $soluong;
            $bills_detail->save();
            // cập nhật lại Bills
            $bills = Bills::find($bills_detail->bills->id);

            $bills->total = $bills->total - ($bills_detail->unit_price*$bandau) + ($bills_detail->unit_price*$soluong);
            $bills->check_bills = 0;
            $bills->save();
    }

    public function getTheLoaiMenu($id_danhmucmenu)
    {
        $theloamenu = TheLoaiMenu::where('id_danhmucmenu',$id_danhmucmenu)->get();
        
        foreach ($theloamenu as $tlmn) 
        {
            echo  "<option value=".$tlmn->id.">".$tlmn->name."</option>";
        }
    }


}
