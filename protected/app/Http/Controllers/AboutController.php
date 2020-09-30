<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\About;

class AboutController extends Controller
{
    //
    public function getDanhSach()
    {
    	$about = About::all();

    	return view('admin/about/danhsach',['about'=>$about]);
    }

    public function getThem()
    {
    	return view('admin/about/them');
    }

    public function postThem(Request $request)
    {
    	$about = new About;
    	$this->validate($request,
       	[
                'name'=>'required',
                'email'=>'required|email',               
                'phone'=>'required|numeric',                
                'address'=>'required',
                'description'=>'required'
            ],
            [
                'name.required'=>'Tên không được để trống',               
                'email.required'=>'Email không được để trống',
                'email.email'=>'Email không hợp lệ',
                'phone.required'=>'Số điện thoại không được để trống',
                'phone.numeric'=>'Số điện thoại phải là số',
                'address.required'=>'Địa chỉ không được để trông',
                'description.required'=>'Miêu tả không được để trông'

            ]);         
    	$date = explode('/', $request->year);
           $about->year = $date[2].'-'.$date[1].'-'.$date[0];
            $about->name = $request->name;
            $about->phone = $request->phone;
            $about->email = $request->email;            
            $about->fax = $request->fax;
            $about->website = $request->website;
            $about->address = $request->address;
            $about->googlemap = $request->googlemap;
           	$about->description = $request->description;
            $about->activi = $request->activi;
            if ($request->hasFile('image')) 
    	{

    		$file = $request->file('image');
    		$duoi = $file->getClientOriginalExtension();
    		if ($duoi != 'jpg' && $duoi != 'JPG' && $duoi != 'png' && $duoi != 'jpeg') 
    		{
    			return redirect()->route('getThemBanner')->with('loi','Bạn chỉ được up ảnh có định dạng JPG,PNG, JPEG');
    		}
    		$name = str_random(5).'_'.$file->getClientOriginalName();
    		while (file_exists('image/about/'.$name)) 
    		{
    			$name = str_random(5).'_'.$file->getClientOriginalName();
    		}
    		$file->move('image/about',$name);
    		$about->image = $name;
    		
    	}
    	else
    		$about->image = '';

            $about->save();

            return redirect()->route('getThemAbout')->with('thongbao','Thêm thông tin thành công');
    }

    public function getSua($id)
    {
    	$about = About::find($id);

    	return view('admin/about/sua',['about'=>$about]);
    }

    public function postSua(Request $request,$id)
    {
    	$about = About::find($id);
    	$this->validate($request,
       	[
                'name'=>'required',
                'email'=>'required|email',               
                'phone'=>'required|numeric',                
                'address'=>'required',
                'description'=>'required'
            ],
            [
                'name.required'=>'Tên không được để trống',               
                'email.required'=>'Email không được để trống',
                'email.email'=>'Email không hợp lệ',
                'phone.required'=>'Số điện thoại không được để trống',
                'phone.numeric'=>'Số điện thoại phải là số',
                'address.required'=>'Địa chỉ không được để trông',
                'description.required'=>'Miêu tả không được để trông'

            ]);         
    	$date = explode('/', $request->year);
            $about->year = $date[2].'-'.$date[1].'-'.$date[0];
            $about->name = $request->name;
            $about->phone = $request->phone;
            $about->email = $request->email;            
            $about->fax = $request->fax;
            $about->website = $request->website;
            $about->address = $request->address;
            $about->googlemap = $request->googlemap;
           	$about->description = $request->description;
            $about->activi = $request->activi;
            if ($request->hasFile('image')) 
    	{

    		$file = $request->file('image');
    		$duoi = $file->getClientOriginalExtension();
    		if ($duoi != 'jpg' && $duoi != 'JPG' && $duoi != 'png' && $duoi != 'jpeg') 
    		{
    			return redirect()->route('getThemBanner')->with('loi','Bạn chỉ được up ảnh có định dạng JPG,PNG, JPEG');
    		}
    		$name = str_random(5).'_'.$file->getClientOriginalName();
    		while (file_exists('image/about/'.$name)) 
    		{
    			$name = str_random(5).'_'.$file->getClientOriginalName();
    		}
    		$file->move('image/about',$name);
    		if (file_exists('image/about/'.$about->image)) 
    		{	//đang lỗi unlink permission denied
    			unlink('image/about/'.$about->image);
    		}
    		$about->image = $name;
    		
    	}
            $about->save();

            return redirect()->route('getSuaAbout',$id)->with('thongbao','Sửa thông tin thành công');
    }

    public function getXoa($id)
    {
    	About::destroy($id);

    	return redirect()->route('getDanhSachAbout')->with('thongbao','Xóa thành công');
    }
}
