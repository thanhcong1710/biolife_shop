<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\SoftDeletes;

use Illuminate\Http\Request;

use App\Http\Requests;

 use App\Slide;

 use App\User;


class SlideController extends Controller
{
    //
    public function getDanhSach()
    {

    	$slide = Slide::all();
    	
    	return view('admin.slide.danhsach',['slide'=>$slide]);
    }

    public function getThem()
    {
    	return view('admin.slide.them');
    }

    public function postThem(Request $request)
    {
    	$this->validate($request,
    		[
    			'Ten'=>'required',
    			'NoiDung'=>'required',
    			'Hinh'=>'required'
    		],
    		[
    			'Ten.required'=>'Bạn chưa nhập tên',
    			'NoiDung.required'=>'Bạn chưa nhập nội dung',
    			'Hinh.required'=>'Bạn chưa upload hình'
    		]);
    	$slide = new Slide;
    	$slide->Ten = $request->Ten;
    	$slide->NoiDung = $request->NoiDung;
    	if($request->has('link'))
    	{
    		$slide->link = $request->link;
    	}
    	else
    		$slide->link = '';

    	if ($request->hasFile('Hinh')) 
    	{
    		$file = $request->file('Hinh');
    		$duoi = $file->getClientOriginalExtension();
    		if ($duoi != 'jpg' && $duoi != 'npg' && $duoi != 'jpeg') 
    		{
    			return redirect('admin/slide/them')->with('loi','Bạn chỉ được thêm ảnh có định dạnh JPG, NPG, JPEG');
    		}
    		$name = str_random(5)."_".$file->getClientOriginalName();
    		// kiểm tra trùng ảnh
    		while (file_exists('image/slide/'.$name)) 
    		{
    			$name = str_random(5)."_".$file->getClientOriginalName();
    		}
    		$file->move('image/slide/',$name);
    		$slide->Hinh = $name;
    	}
    	else
    		$slide->Hinh = '';
    	$slide->save();
    	return redirect('admin/slide/them')->with('thongbao','Thêm thành công');
    }

    public function getSua($id)
    {
    	$slide = Slide::find($id);

    	return view('admin/slide/sua',['slide'=>$slide]);
    }

    public function postSua(Request $request, $id)
    {
    	$slide = Slide::find($id);
    	$this->validate($request,
    		[
    			'Ten'=>'required',
    			'NoiDung'=>'required'
    			
    		],
    		[
    			'Ten.required'=>'Bạn chưa nhập tên',
    			'NoiDung.required'=>'Bạn chưa nhập nội dung'
    			
    		]);
    	$slide->Ten = $request->Ten;
    	$slide->NoiDung = $request->NoiDung;
    	if ($request->has('link')) 
    	{
    		$slide->link = $request->link;
    	}
    	if ($request->hasFile('Hinh')) 
    	{
    		$file = $request->file('Hinh');
    		$duoi = $file->getClientOriginalExtension();
    		if ($duoi != 'jpg' && $duoi != 'npg' && $duoi != 'jpeg') 
    		{
    			return redirect('admin/slide/sua/'.$id)->with('loi','Bạn chỉ được thêm ảnh có định dạnh JPG, NPG, JPEG');
    		}
    		$name = str_random(5)."_".$file->getClientOriginalName();
    		// kiểm tra trùng ảnh
    		while (file_exists('image/slide/'.$name)) 
    		{
    			$name = str_random(5)."_".$file->getClientOriginalName();
    		}
    		$file->move('image/slide/',$name);
    		if (file_exists('image/slide/'.$news->Hinh)) 
                        {
                            unlink('image/slide/'.$news->Hinh);
                        }
    		$slide->Hinh = $name;
    	}
    	$slide->save();

    	return redirect('admin/slide/sua/'.$id)->with('thongbao','Sua tin thành công');
    }

    /*public function getXoa($id)
    {
    	$slide = Slide::find($id);
    	$slide->delete();
    	unlink('image/slide/'.$slide->Hinh);
    	return redirect()->route('getDanhSach')->with('thongbao','Xóa thành công');
    }*/

    public function getXoa($id)
    {
        $slide = Slide::destroy($id);
        return redirect()->route('getDanhSachSlide')->with('thongbao','Xóa thành công');
    }
}
