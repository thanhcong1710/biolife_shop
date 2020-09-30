<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Bill_Detail;

use App\Bills;

use App\Products;

use Mail;

use DB;

class Bill_DetailController extends Controller
{
    //o
    public function getBillDetail($id)
    {

    	$bills = Bills::find($id);

    	$bills_detail = Bill_Detail::where('id_bills',$id)->get();

    	return view('admin/bill_detail/detail',['bills_detail'=>$bills_detail,'bills'=>$bills ]);
    }

    public function getDanhDach()
    {

    }

    public function getXoa($id,$id_bills)
    {
    	
    	$bills_detail = Bill_Detail::find($id);
    	// cập nhật lại Bills
    	$bills = Bills::find($id_bills);

    	$bills->total = $bills->total - ($bills_detail->unit_price*$bills_detail->quantity);

    	$bills->save();

    	Bill_Detail::destroy($id);

    	return redirect()->back()->with('thongbao','Xóa thành công');
    }
    //hàm chuyển đơn hàng và cập nhật kho hàng
    public function postChuyenHang(Request $request)
    {
    	// lấy dữ liệu đơn hàng gửi cho khách hàng

    	$bills = Bills::find($request->id_bills);

    	$bills_detail = Bill_Detail::where('id_bills',$bills->id)->get();  
            // thêm số lượng đã bán
            $n = 0;
            $ms = "Không đủ số lượng để chuyển hàng:<br>";
            foreach ($bills_detail as  $va) 
            {

                    $products = Products::find($va->id_products);  
                    //Lấy số lượng 1 sản phẩm đến thời điểm hiện tại đã bán
                    $total = Bill_Detail::join('bills', 'bills.id', '=', 'bill_detail.id_bills')->select(DB::raw("SUM(bill_detail.quantity) as count"))->where('bill_detail.id_products',$va->id_products)->where('bills.check_bills',1)->groupBy('bill_detail.id_products')->first(); 

                    //Số lượng gửi đơn hàng hiện tại  $va->quantity;         
                    if (count($total) >0) 
                    {
                         $tong = $va->quantity + $total->count;
                    }
                    else 
                        $tong = $va->quantity;                   
                    
                    if($tong > $products->quantity)
                    {             
                        $ms .= $products->name.": còn ".$products->quantity." sản phẩm <br>";
                        $n= $n+1;
                    }                     

            }          
            # gửi mail thành công thì duyệt lại đơn hàng là đã gửi
            //dd($ms);
            if ($n == 0) 
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

                $email = $request->email;
                //đổ dữ liệu vào data được lấy từ trên form xuống theo dạng mảng
                $data = ['bills'=>$bills,'bills_detail'=>$bills_detail,'noidung'=>$request->noidung];
                Mail::send('admin/bill_detail/sendmail',$data,function($message)  use ($email)
                    {
                    //$message->from('changtrai0802@gmail.com','Shop bánh ngọt Hương Lan - xác nhận đơn hàng');// tiêu đề mail
                            $message->to($email, 'Khách hàng')->subject('Kính mời quá khách xác nhận đơn hàng');
                    }
                );   

                $bills->check_bills = 1;

                $bills->save();

                return redirect()->back()->with('thongbao','Gưi mail thành công');
            }
            else
                return redirect()->back()->with('thongbao',$ms);// trả ra giá trị không hợp lệ            
       
    }
    
}
