<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Provider;

use App\Type_Products;


class ProviderController extends Controller
{
    //
    public function getDanhSach()
    {
    	$provider = Provider::all();

    	return view('admin/provider/danhsach',['provider'=>$provider]);
    }

    public function getThem()
    {
    	$type_products = Type_Products::all();

    	return view('admin/provider/them',['type_products'=>$type_products]);
    }

    public function postThem(Request $request)
    {
    	$this->validate($request,
    		[
    			'type_products'=>'required',
    			'name'=>'required|unique:Provider,name'
    		],[
    			'type_products.required'=>'Nhóm sản phẩm không được để trống',
    			'name.required'=>'Tên không được để trống',
    			'name.unique'=>'Tên đã tồn tại'
    		]);
    	$provider = new Provider;
    	$provider->id_type_products = $request->type_products;
    	$provider->name = $request->name;
    	$provider->save();
    	return redirect()->route('getThemProvider')->with('thongbao','Thêm thành công');
    }

    public function getSua($id)
    {
    	$type_products = Type_Products::all();

    	$provider = Provider::find($id);

    	return view('admin/provider/sua',['provider'=>$provider,'type_products'=>$type_products]);
    }

    public function postSua(Request $request,$id)
    {
    	$provider = Provider::find($id);
    	$this->validate($request,
    		[
    			'type_products'=>'required',
    			'name'=>'required'
    		],[
    			'type_products.required'=>'Nhóm sản phẩm không được để trống',
    			'name.required'=>'Tên không được để trống'
    			
    		]);
    	
    	$provider->id_type_products = $request->type_products;
    	$provider->name = $request->name;
    	$provider->save();
    	return redirect()->route('getSuaProvider',$id)->with('thongbao','Sửa thành công');
    }

    public function getXoa($id)
    {
    	Provider::destroy($id);

    	return redirect()->route('getDanhSachProvider',$id)->with('thongbao','Xóa thành công');
    }

}
