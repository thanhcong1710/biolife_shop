<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\LoaiTin;

use App\TheLoai;

class LoaiTinController extends Controller
{
    //
    //function get all list
    public function getDanhSach()
    {
    	$loaitin = LoaiTin::orderBy('id','DESC')->get();
            //dd($loaitin);
    	return view('admin/loaitin/danhsach',['loaitin'=>$loaitin]);
    }
    // get form add
    public function getThem()
    {
    	$theloai = TheLoai::all();

    	return view('admin/loaitin/them',['theloai'=>$theloai]);
    }
    //delete 
    public function getXoa($id)
    {
    	$loaitin = LoaiTin::find($id)->delete();

    	return redirect('admin/loaitin/danhsach')->with('thongbao','Xóa thành công');
    }

    //post add function

    public function postThem(Request $request)
    {

    	$this->validate($request,
    		[
    			'Ten'=>'unique:LoaiTin,Ten|required|min:3|max:100',
    			'TheLoai'=>'required'
    		]
    		,
    		[
    			'Ten.required'=>'Bạn chưa nhập tên loại tin',
    			'Ten.unique'=>'Tên loại tin đã tồn tại',
    			'Ten.min'=>'Tên loại tin phải có độ dài từ 3 đến 100 ký tự',
    			'Ten.max'=>'Tên loại tin không được lớn hơn 100 ký tự',
    			'TheLoai.required'=>'Thê loại không được để trống'
    		]);
    	$loaitin = new LoaiTin;
    	$loaitin->Ten = $request->Ten;
    	$loaitin->TenKhongDau = changeTitle($request->Ten);
    	$loaitin->idTheLoai = $request->TheLoai;
    	$loaitin->save();
    	return redirect('admin/loaitin/them')->with('thongbao','Thêm thể loại thành công');
    }

    //get form edit

    public function getSua($id)
    {
    	$theloai = TheLoai::all();

    	$loaitin = LoaiTin::find($id);

    	return view('admin/loaitin/sua',['theloai'=>$theloai,'loaitin'=>$loaitin]);
    }

    //getsua post

    public function postSua(Request $request,$id)
    {

    	$loaitin = LoaiTin::find($id);
    	$this->validate($request,
    		[
    			'TheLoai'=>'required',
    			'Ten'=>'required|unique:LoaiTin,Ten|min:3|max:100'
    		],[
    			'TheLoai.required'=>'Bạn chưa chọn thể loại tin',
    			'Ten.required'=>'Bạn chưa nhập tên loại tin',
    			'Ten.unique'=>'Tên loại tin đã tồn tại',
    			'Ten.min'=>'Tên loại tin phải có độ dài từ 3 đến 100 ký tự',
    			'Ten.max'=>'Tên loại tin không được lớn hơn 100 ký tự'

    		]);
    	$loaitin->Ten = $request->Ten;
    	$loaitin->TenKhongDau = changeTitle($request->Ten);
    	$loaitin->idTheLoai = $request->TheLoai;
    	$loaitin->save();
    	return redirect('admin/loaitin/sua/'.$id)->with('thongbao','Sửa loại tin thành công');

    }
}
