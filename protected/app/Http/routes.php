<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    //return view('welcome');
    return redirect('trangchu');
});
// show layout
//Route::resource('products','ProductsController');


Route::get('trangchu','PagesController@getTrangChu')->name('trangchu');
//loại sản phẩm
Route::get('product_type/{id}/{tenkhongdau}','PagesController@getProduct_Type')->name('product_type');
//giới thiệu
Route::get('about','PagesController@getAbout')->name('about');
// lỗi
Route::get('error','PagesController@getError');
//form đặt hàng
Route::get('checkout','PagesController@getCheckout');

Route::post('checkout',[
	'as'=>'checkout',
	'uses'=>'PagesController@postCheckout']);
//liên hệ
Route::get('contacts',['as'=>'getContacts','uses'=>'PagesController@getContacts']);

Route::post('contacts',['as'=>'postContacts','uses'=>'PagesController@postContacts']);
//đăng nhập
Route::get('login','PagesController@getLogin')->name('login');

Route::post('login','PagesController@postLogin');

Route::get('logout','PagesController@getLogOut')->name('logout');
//thanh toán
Route::get('pricing','PagesController@getPricing');
// page detail
Route::get('product/{id}/{tenkhongdau}','PagesController@getProduct');
//
Route::get('shopping_cart','PagesController@getShopping_cart');
//đăng ký
Route::get('signup',[
	'as'=>'signup',
	'uses'=>'PagesController@getSignUp']);

Route::post('signup','PagesController@postSignUp');

Route::get('nguoidung',[
	'as'=>'nguoidung',
	'uses'=>'PagesController@getNguoiDung'
	])->middleware('nguoidung');

Route::post('nguoidung',[
	'as'=>'nguoidung',
	'uses'=>'PagesController@postNguoiDung'
	]);
// thêm giỏ hàng
Route::get('add_product/{id}','PagesController@add_product');

Route::get('deleteproductcart/{id}', 'PagesController@deleteProductCart');

Route::get('add_product_multi', 'PagesController@add_product');

Route::get('search','PagesController@getSearch');
Route::get('html_home','PagesController@getHtmlHome')->name('trangchu');
Route::get('html_shopping_cart','PagesController@getHtmlShoppingCart')->name('trangchu');
Route::get('html_product_detail','PagesController@getHtmlProductDetail')->name('trangchu');
Route::get('html_product_category','PagesController@getHtmlProductCategory')->name('trangchu');
Route::get('html_blog_category','PagesController@getHtmlBlogCategory')->name('trangchu');
Route::get('html_blog_detail','PagesController@getHtmlBlogDetail')->name('trangchu');
//lien hẹ

//Route::get('test','PagesController@test');

/*Route::get('delete_at', function(){
	Schema::create('slides', function ($table) {
	$table->increments('id');
    	$table->softDeletes();
	});
});*/
/*Route::get('delete_add', function(){
	Schema::table('users', function ($table) {	
    	$table->softDeletes();
	});
});*/
/*Route::get('delete',function(){
	DB::table('slides')->where('id',1)->delete();
});*/
/*Route::get('add_comment', function(){
	Schema::create('Comment', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idUser')->unsigned();           
            $table->integer('idNews')->unsigned();           
            $table->integer('idProducts')->unsigned();           
            $table->string('NoiDung');
            $table->timestamps();
            $table->SoftDeletes();
        });
});*/

/*Route::get('themfield', function(){
	Schema::create('unit', function($table){
            $table->increments('id')->unique();
            $table->string('Ten');
            $table->timestamps();
            $table->SoftDeletes();
        });
});
*/

#Reoute for admin system
#Route group admin
Route::get('admin/dangnhap','UserController@getDangNhapAdmin');

Route::post('admin/dangnhap','UserController@postDangNhapAdmin');

Route::get('admin/logout','UserController@getlogout');

Route::group(['prefix'=>'admin','middleware'=>'adminlogin'], function(){

	//export doc by phpRTF to .final doc
	Route::Group(['prefix'=>'export_doc'], function(){

		Route::get('demo',[
		'as'=>'getDemo',
		'uses'=>'ExportDocController@getDemo'
			]);
		Route::get('demo2', function(){

			return 222;exit();
		});
	});

	Route::get('/', function(){
		//dd(config('app.timezone'));
		return view('admin/index');
	})->name('index');

	//dành cho thư viện ảnh up lên không bị hacker
	Route::get('getfinder', function(){

		return view('admin/finder/ckfinder');

	})->name('getfinder');
	// dành cho các action sử dụng ajax
	Route::group(['prefix'=>'ajax'], function(){

		Route::get('loaitin/{idTheLoai}',[
			'as'=>'getChangLoaiTin',
			'uses'=>'AjaxController@getLoaiTin']);

		Route::get('provider/{id_type_products}',[
			'as'=>'getDanhSachProvider_Ajax',
			'uses'=>'AjaxController@getDanhSachProvider'
			]);
		Route::get('checkBills/{id}/{tt}',[
			'as'=>'getCheckBills',
			'uses'=>'AjaxController@getCheckBills'
			]);

		Route::get('changeTotal/{id}/{soluong}',[
			'as'=>'getChangeTotal',
			'uses'=>'AjaxController@getChangeTotal'
			]);

		Route::get('theloaimenu/{id_danhmucmenu}',[
			'as'=>'getTheLoaiMenu',
			'uses'=>'AjaxController@getTheLoaiMenu'
			]);
		
	});
	// dành cho các action sử dụng upload file

	Route::group(['prefix'=>'upload'], function(){
		Route::post('hinhanhtintuc','UploadController@postHinhAnhTinTuc');
		//Route::get('hinhanhtintuc','UploadController@getHinhAnhTinTuc');
		//Route::post('ajaxImageUpload', ['as'=>'ajaxImageUpload','uses'=>'UploadController@ajaxImageUploadPost']);
		/*Route::post('ajaxImageUpload', function(){
			return view('admin/loaitin/them');
		});
		*/

	});
	// Group Route for catrlogy

	Route::group(['prefix'=>'type_products'], function(){

		Route::get('danhsach',[
			'as'=>'getDanhSachType_Products',
			'uses'=>'Type_ProductsController@getDanhSach'
			]);

		Route::get('them',[
			'as'=>'getThemType_Products',
			'uses'=>'Type_ProductsController@getThem'
			]);

		Route::post('them',[
			'as'=>'postThemType_Products',
			'uses'=>'Type_ProductsController@postThem'
			]);

		Route::get('sua/{id}',[
			'as'=>'getSuaType_Products',
			'uses'=>'Type_ProductsController@getSua'
			]);

		Route::post('sua/{id}',[
			'as'=>'postSuaType_Products',
			'uses'=>'Type_ProductsController@postSua'
			]);

		Route::get('xoa/{id}',[
			'as'=>'getXoaType_Products',
			'uses'=>'Type_ProductsController@getXoa'
			]);

	});

	Route::group(['prefix'=>'provider'], function(){

		Route::get('danhsach',[
			'as'=>'getDanhSachProvider',
			'uses'=>'ProviderController@getDanhSach'
			]);

		Route::get('them',[
			'as'=>'getThemProvider',
			'uses'=>'ProviderController@getThem'
			]);

		Route::post('them',[
			'as'=>'postThemProvider',
			'uses'=>'ProviderController@postThem'
			]);

		Route::get('sua/{id}',[
			'as'=>'getSuaProvider',
			'uses'=>'ProviderController@getSua'
			]);

		Route::post('sua/{id}',[
			'as'=>'postSuaProvider',
			'uses'=>'ProviderController@postSua'
			]);

		Route::get('xoa/{id}',[
			'as'=>'getXoaProvider',
			'uses'=>'ProviderController@getXoa'
			]);
	});
	

	Route::group(['prefix'=>'products'], function(){

		Route::get('danhsach',[
			'as'=>'getDanhSachProducts',
			'uses'=>'ProductsController@getDanhSach'
			]);

		Route::post('danhsach',[
			'as'=>'postDanhSachProducts',
			'uses'=>'ProductsController@postDanhSach'
			]);

		Route::get('them',[
			'as'=>'getThemProducts',
			'uses'=>'ProductsController@getThem'
			]);

		Route::post('them',[
			'as'=>'postThemProducts',
			'uses'=>'ProductsController@postThem'
			]);

		Route::get('sua/{id}',[
			'as'=>'getSuaProducts',
			'uses'=>'ProductsController@getSua'
			]);

		Route::post('sua/{id}',[
			'as'=>'postSuaProducts',
			'uses'=>'ProductsController@postSua'
			]);

		Route::get('xoa/{id}',[
			'as'=>'getXoaProducts',
			'uses'=>'ProductsController@getXoa'
			]);
	});

	Route::group(['prefix'=>'bills'], function(){

		Route::get('danhsach',[
			'as'=>'getDanhSachBills',
			'uses'=>'BillsController@getDanhSach'
			]);

		Route::get('danhsach/{id}',[
			'as'=>'getDanhSachBillsFormCustomer',
			'uses'=>'BillsController@getDanhSachFormCustomer'
			]);

		Route::get('xoa/{id}',[
			'as'=>'getXoaBills',
			'uses'=>'BillsController@getXoa'
			]);
	});

	Route::group(['prefix'=>'bill_detail'], function(){

		Route::get('detail/{id_bills}',[
			'as'=>'getBillDetail',
			'uses'=>'Bill_DetailController@getBillDetail'
			]);

		Route::get('xoa/{id}/{id_bills}',[
			'as'=>'getXoaBillDetail',
			'uses'=>'Bill_DetailController@getXoa'
			]);

		Route::post('chuyenhang',[
			'as'=>'postChuyenHang',
			'uses'=>'Bill_DetailController@postChuyenHang'
			]);
		
	});

	Route::group(['prefix'=>'customer'], function(){

		Route::get('danhsach',['as'=>'getDanhSachCustomer','uses'=>'CustomerController@getDanhSach']);

		Route::get('xoa/{id}',['as'=>'getXoaCustomer','uses'=>'CustomerController@getXoa']);
	});

	Route::group(['prefix'=>'contacts'], function(){

		Route::get('danhsach',[
			'as'=>'getDanhSachContacts',
			'uses'=>'ContactsController@getDanhSach'
			]);

		Route::get('xoa/{id}',['as'=>'getXoaContacts','uses'=>'ContactsController@getXoa']);

		
	});
	//Route cho thể loại
	Route::group(['prefix'=>'theloai'], function(){
		//admin/theloai/danhsach
		Route::get('danhsach',[
			'as'=>'getDanhSachTheLoai',
			'uses'=>'TheLoaiController@getDanhSach']);

		Route::get('them',[
			'as'=>'getThemTheLoai',
			'uses'=>'TheLoaiController@getThem']);

		Route::post('them',[
			'as'=>'postThemTheLoai',
			'uses'=>'TheLoaiController@postThem']);
		
		Route::get('sua/{id}',[
			'as'=>'getSuaTheLoai',
			'uses'=>'TheLoaiController@getSua']);

		Route::post('sua/{id}',[
			'as'=>'postSuaTheLoai',
			'uses'=>'TheLoaiController@postSua']);

		Route::get('xoa/{id}',[
			'as'=>'getXoaTheLoai',
			'uses'=>'TheLoaiController@getXoa']);		

	});

	// Route Loại TIn
	Route::group(['prefix'=>'loaitin'], function(){
		//admin/theloai/danhsach
		Route::get('danhsach',[
			'as'=>'getDanhSachLoaiTin',
			'uses'=>'LoaiTinController@getDanhSach']);

		Route::get('them',[
			'as'=>'getThemLoaiTin',
			'uses'=>'LoaiTinController@getThem']);

		Route::post('them',[
			'as'=>'postThemLoaiTin',
			'uses'=>'LoaiTinController@postThem']);		

		Route::get('sua/{id}',[
			'as'=>'getSuaLoaiTin',
			'uses'=>'LoaiTinController@getSua']);

		Route::post('sua/{id}',[
			'as'=>'postSuaLoaiTin',
			'uses'=>'LoaiTinController@postSua']);

		Route::get('xoa/{id}',[
			'as'=>'getXoaLoaiTin',
			'uses'=>'LoaiTinController@getXoa']);	

	});

	Route::group(['prefix'=>'news'], function(){

		Route::get('danhsach',[
			'as'=>'getDanhSachNews',
			'uses'=>'NewsController@getDanhSach'
			]);

		Route::get('them',[
			'as'=>'getThemNews',
			'uses'=>'NewsController@getThem'
			]);

		Route::post('them',[
			'as'=>'postThemNews',
			'uses'=>'NewsController@postThem'
			]);

		Route::get('sua/{id}',[
			'as'=>'getSuaNews',
			'uses'=>'NewsController@getSua'
			]);

		Route::post('sua/{id}',[
			'as'=>'postSuaNews',
			'uses'=>'NewsController@postSua'
			]);

		Route::get('xoa/{id}',[
			'as'=>'getXoaNews',
			'uses'=>'NewsController@getXoa'
			]);

	});

	Route::group(['prefix'=>'slide'], function(){

		Route::get('danhsach',[
			'as'=>'getDanhSachSlide',
			'uses'=>'SlideController@getDanhSach']);

		Route::get('them',[
			'as'=>'getThemSlide',
			'uses'=>'SlideController@getThem']);

		Route::post('admin/slide/them',[
			'as'=>'postThemSlide',
			'uses'=>'SlideController@postThem']);

		Route::get('sua/{id}',[
			'as'=>'getSuaSlide',
			'uses'=>'SlideController@getSua'
			]
			);
		Route::post('sua/{id}',[
			'as'=>'postSuaSlide',
			'uses'=>'SlideController@postSua'
			]);

		Route::get('xoa/{id}',[
			'as'=>'getXoaSlide',
			'uses'=>'SlideController@getXoa'
			]);
	});

	Route::group(['prefix'=>'unit'], function(){

		Route::get('danhsach',[
			'as'=>'getDanhSachUnit',
			'uses'=>'UnitController@getDanhSach'
			]);

		Route::get('them',[
			'as'=>'getThemUnit',
			'uses'=>'UnitController@getThem'
			]);

		Route::post('them',[
			'as'=>'postThemUnit',
			'uses'=>'UnitController@postThem'
			]);

		Route::get('sua/{id}',[
			'as'=>'getSuaUnit',
			'uses'=>'UnitController@getSua'
			]);

		Route::post('sua/{id}',[
			'as'=>'postSuaUnit',
			'uses'=>'UnitController@postSua'
			]);

		Route::get('xoa/{id}',[
			'as'=>'getXoaUnit',
			'uses'=>'UnitController@getXoa'
			]);

	});
	// Route user
	Route::group(['prefix'=>'users'], function(){

		Route::get('danhsach',[
			'as'=>'getDanhSachUser',
			'uses'=>'UserController@getDanhSach'
			]);

		Route::get('them',[
			'as'=>'getThemUser',
			'uses'=>'UserController@getThem'
			]);
		Route::post('them',[
			'as'=>'postThemUser',
			'uses'=>'UserController@postThem'
			]);

		Route::get('sua/{id}',[
			'as'=>'getSuaUser',
			'uses'=>'UserController@getSua'
			]);
		Route::post('sua/{id}',[
			'as'=>'postSuaUser',
			'uses'=>'UserController@postSua'
			]);

		Route::get('xoa/{id}',[
			'as'=>'getXoaUser',
			'uses'=>'UserController@getXoa'
			]);

	});
	
	Route::group(['prefix'=>'thongtinchung'], function(){

		Route::get('danhsach',[
			'as'=>'getDanhSachThongtinchung',
			'uses'=>'ThongtinchungController@getDanhSach'
			]);

		Route::post('sua/{id}',['as'=>'postSuaThongtinchung','uses'=>'ThongtinchungController@postSua']);	

		Route::get('facebookpluginssocial',[
			'as'=>'getDanhSachFacebookPluginsSocial',
			'uses'=>'FacebookPluginsSocialController@getDanhSach'
			]);

		Route::post('suafacebookpluginssocial',[
			'as'=>'postSuaFacebookPluginsSocial',
			'uses'=>'FacebookPluginsSocialController@postSua'
			]);
		
	});

	Route::group(['prefix'=>'banner'],function(){

		Route::get('danhsach',[
			'as'=>'getDanhSachBanner',
			'uses'=>'BannerController@getDanhSach'
			]);

		Route::get('them',[
			'as'=>'getThemBanner',
			'uses'=>'BannerController@getThem'
			]);

		Route::post('them',[
			'as'=>'postThemBanner',
			'uses'=>'BannerController@postThem'
			]);

		Route::get('sua/{id}',[
			'as'=>'getSuaBanner',
			'uses'=>'BannerController@getSua'
			]);

		Route::post('sua/{id}',[
			'as'=>'postSuaBanner',
			'uses'=>'BannerController@postSua'
			]);

		Route::get('xoa{id}',[
			'as'=>'getXoaBanner',
			'uses'=>'BannerController@getXoa'
			]);		

	});

	Route::group(['prefix'=>'about'], function(){

		Route::get('danhsach',['as'=>'getDanhSachAbout','uses'=>'AboutController@getDanhSach']);

		Route::get('them',['as'=>'getThemAbout','uses'=>'AboutController@getThem']);

		Route::post('them',['as'=>'postThemAbout','uses'=>'AboutController@postThem']);

		Route::get('sua/{id}',['as'=>'getSuaAbout','uses'=>'AboutController@getSua']);

		Route::post('sua/{id}',['as'=>'postSuaAbout','uses'=>'AboutController@postSua']);

		Route::get('xoa/{id}',['as'=>'getXoaAbout','uses'=>'AboutController@getXoa']);

	});

	Route::group(['prefix'=>'export'], function(){			

			Route::get('export_banchay',[
				'as'=>'getBanChayExport',
				'uses'=>'ExportExcelController@getBanChay'
				]);

			Route::get('export_bills',[
				'as'=>'getBillsExport',
				'uses'=>'ExportExcelController@getBills'
				]);

		});

	Route::group(['prefix'=>'thongke'], function(){

			Route::get('banchay',[
			'as'=>'getBanChayProducts',
			'uses'=>'ThongKeController@getBanChay'
			]);
		});







	
	# dành riêng cho các action menu
	Route::group(['prefix'=>'menu','middleware'=>'menu_admin'], function(){

		Route::group(['prefix'=>'danhmucmenu'], function(){

			Route::get('danhsach',[
				'as'=>'getDanhSachDanhMucMenu',
				'uses'=>'DanhMucMenuController@getDanhSach'
				]);

			Route::get('them',[
				'as'=>'getThemDanhMucMenu',
				'uses'=>'DanhMucMenuController@getThem'
				]);

			Route::post('them',[
				'as'=>'postThemDanhMucMenu',
				'uses'=>'DanhMucMenuController@postThem'
				]);

			Route::get('sua/{id}',[
				'as'=>'getSuaDanhMucMenu',
				'uses'=>'DanhMucMenuController@getSua'
				]);

			Route::post('sua/{id}',[
				'as'=>'postSuaDanhMucMenu',
				'uses'=>'DanhMucMenuController@postSua'
				]);

			Route::get('xoa/{id}',[
				'as'=>'getXoaDanhMucMenu',
				'uses'=>'DanhMucMenuController@getXoa'
				]);
		});

		Route::group(['prefix'=>'theloaimenu'], function(){

			Route::get('danhsach',[
				'as'=>'getDanhSachTheLoaiMenu',
				'uses'=>'TheLoaiMenuController@getDanhSach'
				]);

			Route::get('them',[
				'as'=>'getThemTheLoaiMenu',
				'uses'=>'TheLoaiMenuController@getThem'
				]);

			Route::post('them',[
				'as'=>'postThemTheLoaiMenu',
				'uses'=>'TheLoaiMenuController@postThem'
				]);

			Route::get('sua/{id}',[
				'as'=>'getSuaTheLoaiMenu',
				'uses'=>'TheLoaiMenuController@getSua'
				]);

			Route::post('sua/{id}',[
				'as'=>'postSuaTheLoaiMenu',
				'uses'=>'TheLoaiMenuController@postSua'
				]);

			Route::get('xoa/{id}',[
				'as'=>'getXoaTheLoaiMenu',
				'uses'=>'TheLoaiMenuController@getXoa'
				]);
		});

		Route::group(['prefix'=>'menu'], function(){

			Route::get('danhsach',['as'=>'getDanhSachMenu','uses'=>'MenuController@getDanhSach']);

			Route::get('them',['as'=>'getThemMenu','uses'=>'MenuController@getThem']);

			Route::post('them',['as'=>'postThemMenu','uses'=>'MenuController@postThem']);

			Route::get('sua/{id}',['as'=>'getSuaMenu','uses'=>'MenuController@getSua']);

			Route::post('sua/{id}',['as'=>'postSuaMenu','uses'=>'MenuController@postSua']);

			Route::get('xoa/{id}',['as'=>'getXoaMenu','uses'=>'MenuController@getXoa']);
		});

		

	});
} );