<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Http\Requests;

use App\Customer;

use App\Bills;

use App\Bill_Detail;

use App\Products;

use App\Type_Products;

use App\Slide;

use App\Helpers\Common;

use Session;

use App\User;

use App\Contacts;

use App\About;

use App\FacebookPluginsSocial;

class PagesController extends Controller
{
    #trong phần này nếu để tăng ferformance  thì các giá trị khởi tạo sẽ để trong AppServiceprovider->Boot()
    #Trong Boot nó chỉ khởi tạo một lần lúc load trong và khi đó các giá trị đc lưu trong service container

    public function __construct()
    {
    
      #chuyển qua service provider
        /*
      if (Auth::check())
    	{
    		view()->share('nguoidung',Auth::user());
    	}
      $type_products = Type_Products::all();

      if (count($type_products) >0 )
      {
        view()->share('type_products',$type_products);
      }
      */
    }

    public function getTrangChu()
    {
        #-------test----------
        //dd(get_class(app()->make('hash')));
        //dd(Common::changeTitle('Bùi Văn Hiếu'));
        //$common = new Common;
        //echo $totail = Common::sumTwoNumber(4,7);
        //dd(Common::getSlide());
        //dd(getSlide2());
        #-------End - test----------


        $slide = Slide::all();
        //dd($slide);
        $products = Products::where('new', 1)->paginate(4);

        $products_top = Products::where('promotion_price', '!=', 0)->paginate(8);

        return view('pages.trangchu', ['slide'=>$slide,'products'=>$products,'products_top'=>$products_top]);
    }

    public function getProduct_Type($id)
    {
        $products = Products::where('new', 1)->where('id_type_products', $id)->paginate(3);
        // lấy sản phẩm khác
        $products_top = Products::where('id_type_products', '!=', $id)->paginate(6);
        //Products_Type lấy trực tiếp từ share view trong service provider function boot
        $loai_products = Type_Products::find($id);
        return view('pages.product_type', ['products'=>$products,'products_top'=>$products_top,'loai_products'=>$loai_products]);
    }

    public function getAbout()
    {
        $about = About::all();
        return view('pages.about', ['about'=>$about]);
    }

    public function getError()
    {
        return view('pages.error');
    }

    public function getCheckout()
    {
        //dd(session('item'));
        return view('pages.checkout', ['item'=>session('item'),'tongtien'=>session('tongtien'),'tongsanpham'=>session('tongsanpham')]);
    }

    public function postCheckout(Request $request)
    {
        $this->validate(
        $request,
        [
            'name'=>'required',
            'email'=>'required',
            'address'=>'required',
            'phone'=>'required'

        ],
        [
            'name.required'=>'Chưa nhập họ và tên',
            'email.required'=>'Chưa nhập địa chỉ Email',
            'address.required'=>'Chưa nhập địa chỉ',
            'phone.required'=>'Chưa nhập số điện thoại'
        ]
    );
        //save info customer
        $customer = new Customer;
        $customer->name = $request->name;
        $customer->gender = $request->gender;
        $customer->email = $request->email;
        $customer->address = $request->address;
        $customer->phone = $request->phone;
        $customer->note = $request->note;
        $customer->save();
        // save bills
        $bills = new Bills;
        $bills->id_customer = $customer->id;
        $bills->date_order = date('Y-m-d');
        $bills->total = session('tongtien');
        $bills->payment = $request->payment_method;
        $bills->note = $request->note;
        $bills->save();
        // bill_detail
        foreach (session('item') as $key => $item) {
            $bill_detail = new Bill_Detail;
            $bill_detail->id_bills = $bills->id;
            $bill_detail->id_products = $key;
            $bill_detail->quantity = $item['soluong'];
            if ($item['item']->promotion_price < $item['item']->unit_price && $item['item']->promotion_price  != 0) {
                $dongia = $item['item']->promotion_price;
            } else {
                $dongia = $item['item']->unit_price;
            }
        
            $bill_detail->unit_price = $dongia;
            $bill_detail->save();
        }

        return redirect('checkout')->with('thongbao', 'Đăng ký mua hàng thành công');
    }

    public function getContacts()
    {
        return view('pages.contacts');
    }

    public function postContacts(Request $request)
    {
        $this->validate(
            $request,
            [
          'name'=>'required',
          'email'=>'required',
          'subject'=>'required',
          'phone'=>'required',
          'message'=>'required'
        ],
            [
          'name.required'=>'Chưa nhập họ và tên',
          'email.required'=>'Chưa nhập địa chỉ Email',
          'subject.required'=>'Chưa nhập chủ đềỉ',
          'phone.required'=>'Chưa nhập số điện thoại',
          'message.required'=>'Chưa nhập tin nhắn'
        ]
        );
        
        //save info customer
        $contacts = new Contacts;
        $contacts->name = $request->name;
        $contacts->email = $request->email;
        $contacts->phone = $request->phone;
        $contacts->subject = $request->subject;
        $contacts->message = $request->message;
        $contacts->save();

        return redirect()->route('getContacts')->with('thongbao', 'Đã gửi thành công');
    }

    public function getLogin()
    {
        return view('pages.login');
    }

    public function postLogin(Request $request)
    {
        $this->validate(
        $request,
        [
                
			'email'=>'required|email',
			'password'=>'required'
			
		],
        [
                
			'email.required'=>'Email không được để trống',
			'email.email'=>'Email không hợp lệ',
			'password.required'=>'Mật không không được để trống'

		]
    );
        if (Auth::attempt(['email'=>$request->email,'password'=>$request->password])) {
            return redirect('trangchu');
        } else {
            return redirect('login');
        }
    }

    public function getLogOut()
    {
        Session::flush();

        Auth::logout();

        return redirect('trangchu');
    }

    public function getPricing()
    {
        return view('pages.pricing');
    }
    // get detail product
    public function getProduct($id)
    {
        $sanpham = Products::find($id);

        $sanphamcungloai = Products::where('id', '!=', $id)->where('id_type_products', $sanpham->id_type_products)->paginate(6);

        $products_new = Products::where('new', 1)->take(4)->get();
      
        $facebookpluginssocial = FacebookPluginsSocial::find(1);

        $products_banchay = Bill_Detail::orderBy('quantity', 'ESC')->take(4)->get();

        return view('pages.product', ['sanpham'=>$sanpham,'sanphamcungloai'=>$sanphamcungloai,'products_new'=>$products_new,'facebookpluginssocial'=>$facebookpluginssocial,'products_banchay'=>$products_banchay]);
    }

    public function getShopping_cart()
    {
        return view('pages.shopping_cart');
    }

    public function getSignUp()
    {
        return view('pages.signup');
    }
   
    public function postSignUp(Request $request)
    {
        $this->validate(
        $request,
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
		]
    );
        $dangky = new User;

        $dangky->name = $request->name;

        $dangky->email = $request->email;

        $dangky->password = bcrypt($request->password);

        $dangky->lavel = 0;

        $dangky->phone = $request->phone;

        $dangky->address = $request->address;

        $dangky->save();

        // đăng nhập luôn cho tài khoản

        $user = User::find($dangky->id);

        Auth::login($user);

        return redirect('signup')->with('thongbao', 'Đăng ký thành công');
    }

    public function getNguoiDung()
    {
        $nguoidung = Auth::user();
        return view('pages.nguoidung', ['nguoidung'=>$nguoidung]);
    }

    public function postNguoiDung(Request $request)
    {
        $this->validate(
        $request,
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

            ]
    );
        $user = Auth::user();
        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->address = $request->address;
        if ($request->changepass == 'on') {
            $this->validate(
            $request,
            [
                'password'=>'required|min:3|max:30',
                'passwordAgain'=>'required|same:password'
            ],
            [
                'password.required'=>'Mật khẩu không được để trống',
                'password.min'=>'Mật khẩu không được nhỏ hơn 3 ký tự',
                'password.max'=>'Mật khẩu không được dài quá 30 ký tự',
                'passwordAgain.same'=>'Mật khẩu nhắc lại chưa đúng',
                'passwordAgain.required'=>'Nhắc lại mật khẩu không được để trống'
            ]
        );
            $user->password = bcrypt($request->password);
        }
        $user->save();
        return redirect('nguoidung')->with('thongbao', 'Sửa tài khoản thành công');
    }


    public function add_product(Request $request)
    {
        if (Session::has('cart')) { // nếu trong giỏ hàng đã có hàng
            $danhsach = session('cart');
            // kiểm tra xem id đã tồn tại chưa nếu tòn tại rồi ta công thêm giá trị vào
            if (in_array($request->id, array_keys($danhsach))) {
                if (isset($request->soluong)) {
                    //nếu tồn tại biến số lượng thì lấy cộng thêm số lượng cũ
                    $danhsach[$request->id]['soluong']  = $request->soluong+$danhsach[$request->id]['soluong'];
                } else { 	 // nếu không số lượng bằng số lượng ban đầu cộng 1
                    $danhsach[$request->id]['soluong']  = $danhsach[$request->id]['soluong'] +1;
                }
                // gán lại số lượng mới
                Session::set('cart', $danhsach);
            } else {//nếu mua thêm sản phẩm mới và trước đó đã mua một số sản phẩm
            //kiểm tra có biến số lượng truyền vào không nếu có thì gán giá trị truyền vào
                if (isset($request->soluong)) {
                    $soluong = $request->soluong;
                } else {// không mặc định mua số lượng 1
                    $soluong = 1;
                }

                $item = Products::find($request->id);

                $danhsach[$request->id] = array('id'=>$request->id,'item'=>$item,'soluong'=>$soluong);
            
                Session::set('cart', $danhsach);
            }
        } elseif (!Session::has('cart')) {
            $danhsach = array();
        
            if (isset($request->soluong)) {
                $soluong = $request->soluong;
            } else {
                $soluong = 1;
            }

            $item = Products::find($request->id);

            $danhsach[$request->id] = array('id'=>$request->id,'item'=>$item,'soluong'=>$soluong);
        
            Session::set('cart', $danhsach);
        }
        // tính tổng số tiền phải thanh toán
        if (Session::has('cart')) {
            $danhsach = session('cart');
            $tongtien = '';
            $tongsanpham = 0;
            $item = array();
            foreach ($danhsach as $key => $value) {
                // nếu sản phẩm có khuyến mại và giá khuyến mại nhỏ hơn giá ban đầu thì sẽ bằng tổng số lượng nhân với giá khuyến mại và ngược lại
                if ($key <> 'tongtien' && $key <> 'tongsanpham') {
                    error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
                    if ($value['item']->promotion_price <> 0 and $value['item']->promotion_price < $value['item']->unit_price) {
                        $tongtien = $tongtien + $value['soluong']*$value['item']->promotion_price;
                    } else {
                        $tongtien = $tongtien + $value['soluong']*$value['item']->unit_price;
                    }
                    $tongsanpham = $value['soluong'] + $tongsanpham;
                }
            }

            Session::set('item', $danhsach);
            Session::set('tongtien', $tongtien);
            Session::set('tongsanpham', $tongsanpham);
        }

        return redirect()->back();
    }

    public function deleteProductCart($id)
    {
        if (Session::has('cart')) { // nếu trong giỏ hàng đã có hàng
            $danhsach = session('cart');
            // kiểm tra xem id đã tồn tại chưa nếu tòn tại rồi ta công thêm giá trị vào
            if (in_array($id, array_keys($danhsach))) {
                if ($danhsach[$id]['soluong'] > 1) {
                    //nếu tồn tại biến số lượng lớn hơn 2 thì giảm 1
                    $danhsach[$id]['soluong']  = $danhsach[$id]['soluong'] -1;
                } else { 	 // nếu chỉ có một loại thì xóa bỏ
                    unset($danhsach[$id]);
                }
                if (count($danhsach) == 0) {
                    Session::forget('cart');
                } else {
                    Session::set('cart', $danhsach);
                }
            }
        }
        // tính tổng số tiền phải thanh toán
        if (Session::has('cart')) {
            $danhsach = session('cart');
            $tongtien = '';
            $tongsanpham = 0;
            $item = array();
            foreach ($danhsach as $key => $value) {
                // nếu sản phẩm có khuyến mại và giá khuyến mại nhỏ hơn giá ban đầu thì sẽ bằng tổng số lượng nhân với giá khuyến mại và ngược lại
                if ($key <> 'tongtien' && $key <> 'tongsanpham') {
                    error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
                    if ($value['item']->promotion_price <> 0 and $value['item']->promotion_price < $value['item']->unit_price) {
                        $tongtien = $tongtien + $value['soluong']*$value['item']->promotion_price;
                    } else {
                        $tongtien = $tongtien + $value['soluong']*$value['item']->unit_price;
                    }
                    $tongsanpham = $value['soluong'] + $tongsanpham;
                }
            }

            Session::set('item', $danhsach);
            Session::set('tongtien', $tongtien);
            Session::set('tongsanpham', $tongsanpham);
        } else {
            Session::forget('item');
            Session::set('tongtien', 0);
            Session::set('tongsanpham', 'Trống');
        }
        return redirect()->back();
    }
    // function search products
    public function getSearch(Request $request)
    {
        if ($request->stringsearch != '') {
            $tukhoa = $request->stringsearch;
            
            
            $products = Products::where('name', 'like', "%$tukhoa%")->take(50)->paginate(9);
            
            if (count($products) > 0) {
                return view('pages.search', ['products'=>$products,'tukhoa'=>$tukhoa]);	# code...
            } else {
                return view('pages.search', ['str'=>'Không tìm thấy kết quả phù hợp','tukhoa'=>$tukhoa]);
            }
        } else {
            return redirect()->back();
        }
    }
    public function getHtmlHome()
    {
        return view('pages.html_home');
    }
    public function getHtmlShoppingCart()
    {
        return view('pages.html_shopping_cart');
    }
    public function getHtmlProductDetail()
    {
        return view('pages.html_product_detail');
    }
    public function getHtmlProductCategory()
    {
        return view('pages.html_product_category');
    }
    public function getHtmlBlogCategory()
    {
        return view('pages.html_blog_category');
    }
    public function getHtmlBlogDetail()
    {
        return view('pages.html_blog_detail');
    }
}
