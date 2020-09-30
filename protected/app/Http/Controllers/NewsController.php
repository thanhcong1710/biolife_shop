<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\News;

use App\TheLoai;

use App\LoaiTin;

use Redis;

class NewsController extends Controller
{
    //
    public function getDanhSach()
    {
    	$news = News::all();

    	return view('admin/news/danhsach',['news'=>$news]);
    }

    public function getThem()
    {
            $theloai = TheLoai::all();

            $loaitin = LoaiTin::all();

            return view('admin.news.them',['theloai'=>$theloai,'loaitin'=>$loaitin]);
    	
    }

    public function postThem(Request $request)
    {
    	$this->validate($request, 
            [
                'TheLoai'=>'required',
                'LoaiTin'=>'required',
                'TieuDe'=>'required|unique:news,TieuDe',
                'TomTat'=>'required',
                'NoiDung'=>'required'
            ],[
                'TheLoai.required'=>'Bạn chưa chọn thể loại tin',
                'LoaiTin.required'=>'Bạn chưa chọn loại tin',
                'TieuDe.required'=>'Bạn chưa nhập tiêu đề tin',
                'TieuDe.unique'=>'Tiêu đề đã tồn tại',              
                'TomTat.required'=>'Bạn chưa nhập tóm tắt',
                'NoiDung.required'=>'Bạn chưa nhập nội dung'
                
            ]);

        $news = new News;
        $news->TieuDe = $request->TieuDe;
        $news->TieuDeKhongDau = changeTitle($request->TieuDe);
        $news->TomTat = $request->TomTat;
        $news->NoiDung = $request->NoiDung;
        $news->NoiBat = $request->NoiBat;
        $news->idLoaiTin = $request->LoaiTin;
        $news->SoLuongXem = 0;
        // add images
        //var_dump($request->hasFile('Hinh'));
        if ($request->hasFile('Hinh')) 
        {
            $file = $request->file('Hinh');
            $duoi = $file->getClientOriginalExtension();
            if ($duoi != 'jpg' && $duoi != 'png' && $duoi != 'jpeg') 
            {
                return redirect('admin/news/them')->with('loi','Bạn chỉ được phép thêm ảnh có định dạng JPG, PNG, JPGE');
            }
            $name = $file->getClientOriginalName();
            $name = str_random(5)."_".$name;
            while (file_exists('image/news/'.$name)) 
            {
                $name = str_random(5)."_".$name;
            }
            $file->move('image/news',$name);
            $news->Hinh = $name;
            
        }
        else
            $news->Hinh = "";
        
        $news->save();
        return redirect('admin/news/them')->with('thongbao','Thêm tin thành công');
    }

    public function getSua($id)
    {
            $news = News::find($id); 

            $theloai = TheLoai::all();

            $loaitin = LoaiTin::where('idTheLoai',$news->loaitin->theloai->id)->get(); 

    	return view('admin.news.sua',['news'=>$news,'theloai'=>$theloai,'loaitin'=>$loaitin]);
    }

    public function postSua(Request $request,$id)
    {
    	$news = News::find($id);
            $this->validate($request, 
            [
                'TheLoai'=>'required',
                'LoaiTin'=>'required',
                'TieuDe'=>'required',
                'TomTat'=>'required',
                'NoiDung'=>'required'
            ],[
                'TheLoai.required'=>'Bạn chưa chọn thể loại tin',
                'LoaiTin.required'=>'Bạn chưa chọn loại tin',
                'TieuDe.required'=>'Bạn chưa nhập tiêu đề tin',
                'TieuDe.unique'=>'Tiêu đề đã tồn tại',              
                'TomTat.required'=>'Bạn chưa nhập tóm tắt',
                'NoiDung.required'=>'Bạn chưa nhập nội dung'
                
            ]);

        $news->TieuDe = $request->TieuDe;
        $news->TieuDeKhongDau = changeTitle($request->TieuDe);
        $news->TomTat = $request->TomTat;
        $news->NoiDung = $request->NoiDung;
        $news->NoiBat = $request->NoiBat;
        $news->idLoaiTin = $request->LoaiTin;
        ///---------nhúng
        $news->comments = $request->comments;
        $news->like_button = $request->like_button;
        $news->share_button = $request->share_button;
        $news->send_button = $request->send_button;
        $news->follow_button = $request->follow_button;
        
        // add images
        //var_dump($request->hasFile('Hinh'));
        if ($request->hasFile('Hinh')) 
        {
            $file = $request->file('Hinh');
            $duoi = $file->getClientOriginalExtension();
            if ($duoi != 'jpg' && $duoi != 'png' && $duoi != 'jpeg') 
            {
                return redirect('admin/news/them')->with('loi','Bạn chỉ được phép thêm ảnh có định dạng JPG, PNG, JPGE');
            }
            $name = $file->getClientOriginalName();
            $name = str_random(5)."_".$name;
            while (file_exists('image/news/'.$name)) 
            {
                $name = str_random(5)."_".$name;
            }
            $file->move('image/news',$name);
            if (file_exists('image/news/'.$news->Hinh))
            {
                unlink('image/news/'.$news->Hinh);
            }
            
            $news->Hinh = $name;
            
        }
                
        $news->save();
        return redirect('admin/news/sua/'.$id)->with('thongbao','Sửa tin thành công');
    }

    public function getXoa($id)
    {
    	News::destroy($id);

    	return redirect()->route('getDanhSachNews')->with('thongbao','Xóa thành công');
    }
}
