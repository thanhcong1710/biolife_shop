<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\DanhMucMenu;

class DanhMucMenuController extends Controller
{
    //
    public function getDanhSach()
    {
    	$danhmucmenu = DanhMucMenu::all();

    	return view('admin/danhmucmenu/danhsach',['danhmucmenu'=>$danhmucmenu]);

    }

    public function getThem()
    {
    	return view('admin/danhmucmenu/them');
    }

    public function postThem(Request $request)
    {
    	$this->validate($request,
		[
			'name'=>'required'			
		],
		[
			'name.required'=>'Tên không được để trống'			
			
		]
	);
	$danhmucmenu = new DanhMucMenu;
	$danhmucmenu->name = $request->name;
	$danhmucmenu->route = $request->route;
	$danhmucmenu->path = $request->path;
	$danhmucmenu->action = $request->action;
	$danhmucmenu->show = $request->show;
	$danhmucmenu->save();
	return redirect()->route('getThemDanhMucMenu')->with('thongbao','Thêm thành công');
    }

    public function getSua($id)
    {
    	$danhmucmenu = DanhMucMenu::find($id);

    	return view('admin/danhmucmenu/sua',['danhmucmenu'=>$danhmucmenu]);
    }

    public function postSua(Request $request,$id)
    {
    	$danhmucmenu = DanhMucMenu::find($id);
    	$this->validate($request,
		[
			'name'=>'required'			
		],
		[
			'name.required'=>'Tên không được để trống'			
			
		]
	);
	
	$danhmucmenu->name = $request->name;
	$danhmucmenu->route = $request->route;
	$danhmucmenu->path = $request->path;
	$danhmucmenu->action = $request->action;
	$danhmucmenu->show = $request->show;
	$danhmucmenu->save();
	return redirect()->route('getSuaDanhMucMenu',$id)->with('thongbao','Sửa thành công');
    }

    public function getXoa($id)
    {
    	DanhMucMenu::destroy($id);
    	return redirect()->route('getDanhSachDanhMucMenu',$id)->with('thongbao','Xóa thành công');
    }
}
