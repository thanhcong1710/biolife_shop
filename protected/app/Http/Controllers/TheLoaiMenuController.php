<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\TheLoaiMenu;

use App\DanhMucMenu;

class TheLoaiMenuController extends Controller
{
    //
    public function getDanhSach()
    {
    	$theloaimenu = TheLoaiMenu::all();

    	return view('admin/theloaimenu/danhsach',['theloaimenu'=>$theloaimenu]);

    }

    public function getThem()
    {
    	$danhmucmenu = DanhMucMenu::all();

    	return view('admin/theloaimenu/them',['danhmucmenu'=>$danhmucmenu]);
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
	$theloaimenu = new TheLoaiMenu;
	$theloaimenu->name = $request->name;
	$theloaimenu->id_danhmucmenu = $request->id_danhmucmenu;
	$theloaimenu->route = $request->route;
	$theloaimenu->path = $request->path;
	$theloaimenu->action = $request->action;
	$theloaimenu->show = $request->show;
	$theloaimenu->save();
	return redirect()->route('getThemTheLoaiMenu')->with('thongbao','Thêm thành công');
    }

    public function getSua($id)
    {
    	$theloaimenu = TheLoaiMenu::find($id);

    	$danhmucmenu = DanhMucMenu::all();
    	
    	return view('admin/theloaimenu/sua',['theloaimenu'=>$theloaimenu,'danhmucmenu'=>$danhmucmenu]);
    }

    public function postSua(Request $request,$id)
    {
    	$theloaimenu = TheLoaiMenu::find($id);
    	$this->validate($request,
		[
			'name'=>'required'			
		],
		[
			'name.required'=>'Tên không được để trống'			
			
		]
	);
	
	$theloaimenu->name = $request->name;
	$theloaimenu->route = $request->route;
	$theloaimenu->path = $request->path;
	$theloaimenu->action = $request->action;
	$theloaimenu->show = $request->show;
	$theloaimenu->save();
	return redirect()->route('getSuaTheLoaiMenu',$id)->with('thongbao','Sửa thành công');
    }

    public function getXoa($id)
    {
    	TheLoaiMenu::destroy($id);

    	return redirect()->route('getDanhSachTheLoaiMenu',$id)->with('thongbao','Xóa thành công');
    }
}
