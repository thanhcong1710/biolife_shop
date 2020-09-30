<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Thongtinchung;

class ThongtinchungController extends Controller
{
    //
    public function getDanhSach()
    {
    	$thongtinchung = Thongtinchung::find(1);

    	return view('admin/thongtinchung/danhsach',['thongtinchung'=>$thongtinchung]);
    }

    public function postSua(Request $request,$id)
    {
    	$thongtinchung = Thongtinchung::find($id);
    	$this->validate($request,
       	[
                'name'=>'required|min:3',
                'email'=>'required|email',               
                'phone'=>'required|numeric',
                'address'=>'required'
            ],
            [
                'name.required'=>'Tên không được để trống',
                'name.min'=>'Tên không được nhỏ hơn 3 ký tự',
                'email.required'=>'Email không được để trống',
                'email.email'=>'Email không hợp lệ',
                'phone.required'=>'Số điện thoại không được để trống',
                'phone.numeric'=>'Số điện thoại phải là số',
                'address.required'=>'Địa chỉ không được để trông'

            ]);         
           
            $thongtinchung->name = $request->name;
            $thongtinchung->email = $request->email;
            $thongtinchung->address = $request->address;
          /*  $thongtinchung->googlemap = $request->googlemap;
            $thongtinchung->chatonline = $request->chatonline;*/
            $thongtinchung->phone = $request->phone;
            $thongtinchung->website = $request->website;
            $thongtinchung->fax = $request->fax;
            $thongtinchung->save();

            return redirect()->route('getDanhSachThongtinchung')->with('thongbao','Thêm thông tin thành công');
    }
}
