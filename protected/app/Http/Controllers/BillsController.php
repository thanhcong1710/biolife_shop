<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Bills;

use Cache;

class BillsController extends Controller
{
    //
    public function getDanhSach()
    {
            # use cache memcacche
            if (Cache::has('bills')) 
            {
                $bills = Cache::get('bills');
            }
            else
            {
                $bills = Bills::all();
                Cache::put('bills',$bills,10);
            }    	
            //dd($bills);
           //$bills = Bills::all();
    	return view('admin/bills/danhsach',['bills'=>$bills]);
    }

    public function getXoa($id)
    {
    	Bills::destroy($id);

    	return redirect()->route('getDanhSachBills')->with('thongbao','Xóa thành công');
    }
    public function getDanhSachFormCustomer($id)
     {
            $bills = Bills::where('id_customer',$id)->get();
           
            return view('admin/bills/danhsach',['bills'=>$bills]);
     }
    
}
