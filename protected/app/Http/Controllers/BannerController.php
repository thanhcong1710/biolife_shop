<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Banner;

class BannerController extends Controller
{
    //
    public function getDanhSach()
    {
    	$banner = Banner::all();

    	return view('admin/banner/danhsach',['banner'=>$banner]);
    }

    public function getThem()
    {
    	return view('admin/banner/them');
    }

    public function postThem(Request $request)
    {
    	$this->validate($request,
    		[
    			'name'=>'required|min:3',
    			'content'=>'required|min:10',
    			'image'=>'required'
    		],
    		[
    			'name.required'=>'Chưa nhập tên',
    			'name.min'=>'Tên không nhỏ hơn 3 ký tự',
    			'content.required'=>'Nội dung không được để trống',
    			'content.min'=>'Nội dung không được nhỏ hơn 10 ký tự',
    			'image.required'=>'Chưa up ảnh'
    		]);

    	$banner = new Banner;

    	$banner->name = $request->name;
    	$banner->content = $request->content;
    	$banner->link = $request->link;
    	$banner->type = $request->type;
    	$banner->activi = $request->activi;
    	if ($request->hasFile('image')) 
    	{
    		$file = $request->file('image');
    		$duoi = $file->getClientOriginalExtension();
    		if ($duoi != 'jpg' && $duoi != 'JPG' && $duoi != 'png' && $duoi != 'jpeg') 
    		{
    			return redirect()->route('getThemBanner')->with('loi','Bạn chỉ được up ảnh có định dạng JPG,PNG, JPEG');
    		}
    		$name = str_random(5).'_'.$file->getClientOriginalName();
    		while (file_exists('image/banner/'.$name)) 
    		{
    			$name = str_random(5).'_'.$file->getClientOriginalName();
    		}
    		$file->move('image/banner',$name);
    		$banner->image = $name;
    		
    	}
    	else
    		$banner->image = '';

    	$banner->save();

    	return redirect()->route('getThemBanner')->with('thongbao','Thêm banner thành công');

    }

    public function getSua($id)
    {
    	$banner = Banner::find($id);

    	return view('admin/banner/sua',['banner'=>$banner]);
    }

    public function postSua(Request $request,$id)
    {
    	$banner = Banner::find($id);

    	$this->validate($request,
    		[
    			'name'=>'required|min:3',
    			'content'=>'required|min:10'
    			
    		],
    		[
    			'name.required'=>'Chưa nhập tên',
    			'name.min'=>'Tên không nhỏ hơn 3 ký tự',
    			'content.required'=>'Nội dung không được để trống',
    			'content.min'=>'Nội dung không được nhỏ hơn 10 ký tự'
    			
    		]);

    	$banner->name = $request->name;
    	$banner->content = $request->content;
    	$banner->link = $request->link;
    	$banner->type = $request->type;
    	$banner->activi = $request->activi;
    	if ($request->hasFile('image')) 
    	{
    		$file = $request->file('image');
    		$duoi = $file->getClientOriginalExtension();
    		if ($duoi != 'jpg' && $duoi != 'JPG' && $duoi != 'png' && $duoi != 'jpeg') 
    		{
    			return redirect()->route('getThemBanner')->with('loi','Bạn chỉ được up ảnh có định dạng JPG,PNG, JPEG');
    		}
    		$name = str_random(5).'_'.$file->getClientOriginalName();
    		while (file_exists('image/banner/'.$name)) 
    		{
    			$name = str_random(5).'_'.$file->getClientOriginalName();
    		}
    		$file->move('image/banner',$name);
    		if (file_exists('image/banner/'.$banner->image)) 
    		{
    			unlink('image/banner/'.$banner->image);
    		}    		
    		$banner->image = $name;
    		
    	}   	

    	$banner->save();

    	return redirect()->route('getSuaBanner',$id)->with('thongbao','Sửa banner thành công');



    }

    public function getXoa($id)
    {
    	Banner::destroy($id);

    	return redirect()->route('getDanhSachBanner')->with('thongbao','Xóa thành công');
    }
}
