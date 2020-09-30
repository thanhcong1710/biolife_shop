<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Unit;

class UnitController extends Controller
{
    //
    public function getDanhSach()
    {
    	$unit = unit::all();

    	return view('admin/unit/danhsach',['unit'=>$unit]);
    }

    public function getThem()
    {
    	return view('admin/unit/them');
    }

    public function postThem(Request $request)
    {

    	$this->validate($request,
    		[
    			'name'=>'required'
    			
    		],
    		[
    			'name.required'=>'Tên không được để trống'
    			
    		]);
    	$unit = new Unit;
    	$unit->name = $request->name;
    	$unit->save();
    	return redirect()->route('getThemUnit')->with('thongbao','Thêm thành công');

    }

    public function getSua($id)
    {
    	$unit = Unit::find($id);

    	return view('admin/unit/sua',['unit'=>$unit]);
    }

    public function postSua(Request $request, $id)
    {
    	$this->validate($request,
    		[
    			'name'=>'required'
    			
    		],
    		[
    			'name.required'=>'Tên không được để trống'
    			
    		]);
    	$unit = Unit::find($id);
    	$unit->name = $request->name;    	
    	$unit->save();
    	return redirect()->route('getSuaUnit',$id)->with('thongbao','Thêm thành công');
    }

    public function getXoa($id)
    {
    	Unit::destroy($id);

    	return redirect()->route('getDanhSachUnit')->with('thongbao','Xóa thành công');
    }


}
