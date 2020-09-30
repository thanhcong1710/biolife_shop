<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Customer;

class CustomerController extends Controller
{
    //
    public function getDanhSach()
    {
    	//Customer::withTrashed()->where('id', 33)->restore();

    	$customer = Customer::all();

    	return view('admin/customer/danhsach',['customer'=>$customer]);
    }

    public function getXoa($id)
    {
    	Customer::destroy($id);

    	return redirect()->route('getDanhSachCustomer')->with('thongbao','Xóa thành công');
    }
}
