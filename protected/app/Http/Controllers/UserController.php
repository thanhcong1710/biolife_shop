<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Helpers\Common;

use App\Http\Requests;

use Session;

use App\User;

use App\TheLoaiMenu;

use DB;

class UserController extends Controller
{
    //
    
    public function getDangNhapAdmin()
    {
    	return view('admin.login');
    }

    public function postDangNhapAdmin(Request $request)
    {
    	$this->validate($request,
    		[
    			'email'=>'required|email|',
    			'password'=>'required'
    		],
    		[
    			'email.required'=>'Bạn chưa nhập email',
    			'email.email'=>'Email không đúng định dạng',
    			'password.required'=>'Mật khẩu không được để trống'
    		]);
    	if (Auth::attempt(['email'=>$request->email,'password'=>$request->password])) 
    	{
    		
	    	//return redirect('admin/slide/danhsach');
                        return redirect()->route('index');
    	}
    	else
    		return redirect('admin/dangnhap')->with('thongbao','Đăng nhập không thành công');
    }
    public function getlogout()
    {

            Session::flush();
            
    	Auth::logout();
    	
    	return redirect('admin/dangnhap');
    }


    public function getDanhSach()
    {

        if(Auth::user()->lavel==1)
            $use = User::all();
        elseif(Auth::user()->lavel==2)
        {
            $use = User::where('id',Auth::user()->id)->orwherein('lavel',[3,0])->get();
        }
        elseif(Auth::user()->lavel==3)
        {
            $use = User::where('id',Auth::user()->id)->orwherein('lavel',[0])->get();
        }

        return view('admin/users/danhsach',['use'=>$use]);
    }

    public function getThem()
    {        

        $chucnang = TheLoaiMenu::select('id','name')->where('id_danhmucmenu','<>',4)->get();
        return view('admin/users/them',['chucnang'=>$chucnang,'lavel'=>Auth::user()->lavel]);
    }

    public function postThem(Request $request)
    {

        # check quyền để chống hack
        if(Auth::user()->lavel == 2 and ($request->lavel == 1 or $request->lavel == 2))
            return redirect()->route('getThemUser')->with('thongbao','Bạn không có quyền thêm tài khoản này');
         if(Auth::user()->lavel == 3 and ($request->lavel == 1 or $request->lavel == 2 or $request->lavel == 3))
            return redirect()->route('getThemUser')->with('thongbao','Bạn không có quyền thêm tài khoản này');
        $this->validate($request,
        [
                'name'=>'required|min:3',
                'email'=>'required|email|unique:users,email',
                'password'=>'required|min:3|max:30',
                'passwordAgain'=>'required|same:password',
                'phone'=>'required|numeric',
                'address'=>'required'
            ],
            [
                'name.required'=>'Tên không được để trống',
                'name.min'=>'Tên không được nhỏ hơn 3 ký tự',
                'email.required'=>'Email không được để trống',
                'email.email'=>'Email không hợp lệ',
                'email.unique'=>'Email đã tồn tại',
                'password.required'=>'Mật không không được để trống',
                'password.min'=>'Mật khẩu phải lớn hơn 3 ký tự',
                'password.max'=>'Mật khẩu không dài quá 30 ký tự',
                'passwordAgain.required'=>'Mật khẩu nhắc lại không được để trống',
                'passwordAgain.same'=>'Nhắc lại mật khẩu chưa đúng',
                'phone.required'=>'Số điện thoại không được để trống',
                'phone.numeric'=>'Số điện thoại phải là số',
                'address.required'=>'Địa chỉ không được để trông'

            ]);
           
            $user = new User;
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = bcrypt($request->password);
            $user->lavel = $request->lavel;     
            if(Auth::user()->lavel == 3)
                $user->lavel = 0;        
            if ((Auth::user()->lavel == 1 || Auth::user()->lavel == 2) && $request->lavel==3 ) 
            {            
                $user->id_theloaimenu = implode(',', $request->id_theloaimenu);
            }
            $user->address = $request->address;
            $user->phone = $request->phone;
            $user->save();

            return redirect()->route('getThemUser')->with('thongbao','Thêm tài khoản thành công');

    }

    public function getSua($id)
    {
        $chucnang = TheLoaiMenu::select('id','name')->where('id_danhmucmenu','<>',4)->get();

        $user = User::find($id);

        return view('admin/users/sua',['user'=>$user,'chucnang'=>$chucnang,'lavel'=>Auth::user()->lavel]);
    }

    public function postSua(Request $request,$id)
    {
        # check quyền để chống hack
        if(Auth::user()->lavel == 2 and ($request->lavel == 1 or $request->lavel == 2))
            return redirect()->route('getThemUser')->with('thongbao','Bạn không có quyền thêm tài khoản này');
         if(Auth::user()->lavel == 3 and ($request->lavel == 1 or $request->lavel == 2 or $request->lavel == 3))
            return redirect()->route('getThemUser')->with('thongbao','Bạn không có quyền thêm tài khoản này');

        $user = User::find($id);
        $this->validate($request,
        [
                'name'=>'required|min:3',                
                'phone'=>'required|numeric',
                'address'=>'required'
            ],
            [
                'name.required'=>'Tên không được để trống',
                'name.min'=>'Tên không được nhỏ hơn 3 ký tự',
                'phone.required'=>'Số điện thoại không được để trống',
                'phone.numeric'=>'Số điện thoại phải là số',
                'address.required'=>'Địa chỉ không được để trông'

            ]);

            if ($request->changePassWord == 'on') 
            {
                 $this->validate($request,
                    [                        
                        'password'=>'required|min:3|max:30',
                        'passwordAgain'=>'required|same:password'                       
                    ],
                    [                        
                        'password.required'=>'Mật không không được để trống',
                        'password.min'=>'Mật khẩu phải lớn hơn 3 ký tự',
                        'password.max'=>'Mật khẩu không dài quá 30 ký tự',
                        'passwordAgain.required'=>'Mật khẩu nhắc lại không được để trống',
                        'passwordAgain.same'=>'Nhắc lại mật khẩu chưa đúng'                      

                    ]);
                 $user->password = bcrypt($request->password);
            }
            $user->name = $request->name; 
            $user->lavel = $request->lavel;
             if(Auth::user()->lavel == 3)
                $user->lavel = 0;        
            if ((Auth::user()->lavel == 1 || Auth::user()->lavel == 2) && $request->lavel==3 ) 
            {
                
                $user->id_theloaimenu = implode(',', $request->id_theloaimenu);
            }
            $user->address = $request->address;
            $user->phone = $request->phone;
            $user->save();

            return redirect()->route('getSuaUser',$id)->with('thongbao','Sửa tài khoản thành công');
    }

    public function getXoa($id)
    {
        // ở đây ta xử dụng hàm destroy thay delete()
        $user = User::destroy($id);

        return redirect()->route('getDanhSachUser')->with('thongbao','Xóa thành công');
    }



}
