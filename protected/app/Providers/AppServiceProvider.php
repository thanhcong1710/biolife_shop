<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\MenuController;

use App\Type_Products;

use App\DanhMucMenu;

use App\TheLoaiMenu;

use App\Menu;

use App\ThongTinChung;

use App\Banner;

use Session;

use Cache;
use App\Providers\UtilityServiceProvider as u;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    
    public function boot()
    {
        //share toàn bộ view        
       /* $type_products = Type_Products::all();

        if (count($type_products) >0 ) 
        {
            view()->share('type_products',$type_products);
        }*/
        // share chỉ định một số view   
        #test valible share
        // fix bug count(NULL) version PHP >= 7.2
       if (version_compare(PHP_VERSION, '7.2.0', '>=')) {
            // Ignores notices and reports all other kinds... and warnings
            error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
            // error_reporting(E_ALL ^ E_WARNING); // Maybe this is enough
        }
        // END fix
        view()->composer('*', function ($view)
        { 
            /*Cache::put('theloai',10,10);
            dd(Cache::get('theloai'));*/
            //dd(csrf_token());
            //dd(Auth::user());
            //dd(session('tongtien'));
            //$guard   = config('auth.defaults.guard');
            //dd(Auth::guard($guard)->user());

        });

        view()->composer(['pages.contacts','layout.header'],function($view){
                $thongtinchung_share = ThongTinChung::find(1);//dd($thongtinchung_share);
                $banner = Banner::where('type',1)->get();
                view()->share(['thongtinchung_share'=>$thongtinchung_share,'banner'=>$banner]);
        });
        view()->composer(['admin.layout.menu'], function($view){
            $user = Auth::user();
            if ($user->lavel == 1) 
            {
                //-----------------------uses cache
                if (Cache::has('menu_share')) 
                { 
                    $menu_share = Cache::get('menu_share');        
                }
                else
                {
                    $menu_share = new MenuController;                   
                    Cache::put('menu_share',$menu_share,10);
                }
                //------------------------uses cache
                if (Cache::has('danhmucmenu_share')) 
                {                   
                    $danhmucmenu_share = Cache::get('danhmucmenu_share');
                }
                else
                {
                    $danhmucmenu_share = DanhMucMenu::all();  
                    Cache::put('danhmucmenu_share',$danhmucmenu_share,10);
                }
                //-----------not uses cache
                /*$menu_share = new MenuController;
                $danhmucmenu_share = DanhMucMenu::all();*/
                view()->share(['danhmucmenu_share'=>$danhmucmenu_share,'menu_share'=>$menu_share]);
            }
            if($user->lavel == 2)
            {
                $menu_share = new MenuController;
                $danhmucmenu_share = DanhMucMenu::where('id','<>',4)->get();
                view()->share(['danhmucmenu_share'=>$danhmucmenu_share,'menu_share'=>$menu_share]);
            }
            if($user->lavel == 3)// chỗ này phải bắt quyền cho quyền bằng 3
            {
                $menu_share = new MenuController;
                $danhmucmenu_share = DanhMucMenu::where('id','<>',4)->get();
                view()->share(['danhmucmenu_share'=>$danhmucmenu_share,'menu_share'=>$menu_share]);
            }

        });

        view()->composer(['admin.layout.menu','admin.layout.header','layout.header'], function($view){
           view()->share('nguoidung',Auth::user());           
        });
         
        view()->composer(['layout.header','pages.product_type','pages.search'], function($view){
            
           $type_products = Type_Products::all();
           $type_blogs = u::query("SELECT * FROM loaitin WHERE deleted_at IS NULL");
            
            $view->with(['type_products'=>$type_products,'type_blogs'=>$type_blogs]);
        });

        view()->composer(['layout.header','pages.shopping_cart'],function($view){
            
            $view->with(['item'=>session('item'),'tongtien'=>session('tongtien'),'tongsanpham'=>session('tongsanpham')]);
                      
        });
       
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
