<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Type_Products;

class Type_ProductsController extends Controller
{
    //
    public function getDanhSach()
    {
    	$type_products = Type_Products::all(); 
            //dd(Type_Products::getDanhSach());
            //dd(Type_Products::getDanhSachByID(1));

    	return view('admin/type_products/danhsach',['type_products'=>$type_products]);
    }

    public function getThem()
    {
    	return view('admin/type_products/them');
    }

    public function postThem(Request $request)
    {

    	$this->validate($request,
    		[
    			'name'=>'required|min:5',
    			'description'=>'required|min:20'
    		],
    		[
    			'name.required'=>'Tên không được để trống',
    			'name.min'=>'Tên không nhỏ hơn 5 ký tự',
    			'description.required'=>'Mô tả không được để trống',
    			'description.min'=>'Mô tả không nhở hơn 5 ký tự'
    		]);
    	$type_products = new Type_Products;
    	$type_products->name = $request->name;
    	$type_products->description = $request->description;
    	if ($request->hasFile('image')) 
    	{
    		$file = $request->file('image');
    		$duoi = $file->getClientOriginalExtension();
    		if ($duoi != 'jpg' && $duoi != 'png' && $duoi != 'jpeg') 
    		{
    			return redirect()->route('getThemType_Products')->with('Bạn chỉ được up ảnh có đuôi IPG, PNG, JPEG');
    		}
    		$name = str_random(5)."_".$file->getClientOriginalName();
    		while (file_exists('image/product/.$name')) 
    		{
    			$name = str_random(5)."_".$file->getClientOriginalName();
    		}
    		$file->move('image/product',$name);
    		$type_products->image = $name;
    	}
    	else
    		$type_products->image = '';

    	$type_products->save();
    	return redirect()->route('getThemType_Products')->with('thongbao','Thêm thành công');

    }

    public function getSua($id)
    {
    	$type_products = Type_Products::find($id);

    	return view('admin/type_products/sua',['type_products'=>$type_products]);
    }

    public function postSua(Request $request, $id)
    {
    	$this->validate($request,
    		[
    			'name'=>'required|min:5',
    			'description'=>'required|min:20'
    		],
    		[
    			'name.required'=>'Tên không được để trống',
    			'name.min'=>'Tên không nhỏ hơn 5 ký tự',
    			'description.required'=>'Mô tả không được để trống',
    			'description.min'=>'Mô tả không nhở hơn 5 ký tự'
    		]);
    	$type_products = Type_Products::find($id);
    	$type_products->name = $request->name;
    	$type_products->description = $request->description;
    	if ($request->hasFile('image'))
    	{
    		//abort(404);
    		$file = $request->file('image');
    		$duoi = $file->getClientOriginalExtension();
    		if ($duoi != 'jpg' && $duoi != 'png' && $duoi != 'jpeg') 
    		{
    			return redirect()->route('getSuaType_Products',$id)->with('Bạn chỉ được up ảnh có đuôi IPG, PNG, JPEG');
    		}
    		$name = str_random(5)."_".$file->getClientOriginalName();
    		while (file_exists('image/product/.$name')) 
    		{
    			$name = str_random(5)."_".$file->getClientOriginalName();
    		}
    		$file->move('image/product',$name);
    		unlink('image/product/'.$type_products->image);
    		$type_products->image = $name;
    	}
    	$type_products->save();
    	return redirect()->route('getSuaType_Products',$id)->with('thongbao','Thêm thành công');
    }

    public function getXoa($id)
    {
    	Type_Products::destroy($id);

    	return redirect()->route('getDanhSachType_Products')->with('thongbao','Xóa thành công');
    }
}
