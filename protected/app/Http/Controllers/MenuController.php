<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Http\Requests;

use App\Menu;

use App\DanhMucMenu;

use App\TheLoaiMenu;

class MenuController extends Controller
{
    //

    public function getDanhSach()
    {
    	$menu = Menu::all();

    	return view('admin/menu/danhsach',['menu'=>$menu]);
    }

    public function getThem()
    {
    	$danhmucmenu = DanhMucMenu::all();

    	$theloaimenu = TheLoaiMenu::all();

    	return view('admin/menu/them',['danhmucmenu'=>$danhmucmenu,'theloaimenu'=>$theloaimenu]);
    }

    public function postThem(Request $request)
    {
    	$this->validate($request,
		[
			'name'=>'required',
			'route'=>'required|unique:menu,route',
			'path'=>'required',
			'action'=>'required|unique:menu,action'
		],
		[
			'name.required'=>'Tên không được để trống',
			'route.required'=>'Route không được để trống',
			'route.unique'=>'Tên thể loại đã tồn tại',
			'path.required'=>'Path không được để trống',
			//'path.unique'=>'Path thể loại đã tồn tại',
			'action.required'=>'Path không được để trống',
			'action.unique'=>'Action thể loại đã tồn tại'
			
		]
	);
	$menu = new Menu;
	$menu->name = $request->name;
	$menu->id_theloaimenu = $request->id_theloaimenu;	
	$menu->route = $request->route;
	$menu->path = $request->path;
	$menu->action = $request->action;
	$menu->show = $request->show;
	$menu->save();
	return redirect()->route('getThemMenu')->with('thongbao','Thêm thành công');
    }

    public function getSua($id)
    {
    	$menu = Menu::find($id);

    	$danhmucmenu = DanhMucMenu::all();

    	if (isset($menu->theloaimenu->danhmucmenu->id)) 
    	{
    		$theloaimenu = TheLoaiMenu::where('id_danhmucmenu',$menu->theloaimenu->danhmucmenu->id)->get(); 
    		return  view('admin/menu/sua',['menu'=>$menu,'danhmucmenu'=>$danhmucmenu,'theloaimenu'=>$theloaimenu]);
    	}   	
           	else
           		return  view('admin/menu/sua',['menu'=>$menu,'danhmucmenu'=>$danhmucmenu]);
    	
    }

    public function postSua(Request $request,$id)
    {
    	$this->validate($request,
		[
			'name'=>'required',
			//'route'=>'required',
			'path'=>'required',
			'action'=>'required'
		],
		[
			'name.required'=>'Tên không được để trống',
			//'route.required'=>'Route không được để trống',			
			'path.required'=>'Path không được để trống',			
			'action.required'=>'Path không được để trống'			
			
		]
	);
	$menu =  Menu::find($id);
	$menu->name = $request->name;
	$menu->id_theloaimenu = $request->id_theloaimenu;
	//$menu->route = $request->route;
	$menu->path = $request->path;
	$menu->action = $request->action;
	$menu->show = $request->show;
	$menu->save();
	return redirect()->route('getSuaMenu',$id)->with('thongbao','Thêm thành công');
    }

    public function getXoa($id)
    {
    	Menu::destroy($id);
    	return  redirect()->route('getDanhSachMenu')->with('thongbao','Xóa thành công');
    }

    public function getMenu($id_theloaimenu)
    {
    	
    	return $menu = Menu::where('id_theloaimenu',$id_theloaimenu)->where('show',1)->get();
    }

    public function checkDanhMuc_byLavelUser($_danhmucmenu)
    {
    	
	$theloaimenu = TheLoaiMenu::where('id_danhmucmenu',$_danhmucmenu)->wherein('id_danhmucmenu',explode(',',Auth::user()->id_theloaimenu))->get();
	
    }


}
