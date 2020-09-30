<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Route;

use Closure;

use App\Menu;


class AdminLoginMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Auth::check()) 
        {
            //dd(Route::getCurrentRoute()->getPath());//"admin/slide/sua/{id}"
            //dd(Route::currentRouteName());//"getSuaSlide"
            //dd(Route::getCurrentRoute()->getActionName());//"App\Http\Controllers\SlideController@getSua"
            //dd($request->path());//"admin/slide/sua/3"//
            //dd($request->url());//"http://localhost/Dropbox/shoplaravel/admin/slide/sua/3"
            //dd(Route::getFacadeRoot()->current()->uri());//"admin/slide/sua/{id}"
            $user = Auth::user();
            if ($user->lavel == 1 or $user->lavel == 2) 
            {
                return $next($request);
            }
            if ($user->lavel == 3) 
            {
                $array_id_theloaimenu = explode(',', $user->id_theloaimenu);# những chức năng được xử dụng
                $route_name = Route::currentRouteName();# lấy tên route để xác định ID xem có được xử dụng hay không                
                $id_theloaimenu = Menu::select('id_theloaimenu')->where('route',$route_name)->get();
               
                if (count($id_theloaimenu) >0 && $route_name != 'index') 
                {
                        foreach ($id_theloaimenu as $id_va) 
                        {
                            
                            if (in_array($id_va->id_theloaimenu, $array_id_theloaimenu)) 
                            {
                                return $next($request);
                            }
                            else                        
                                return redirect()->back();
                        }
                }
                else 
                    return $next($request);
               
            }
            else 
                return redirect('admin/dangnhap');
        }
        else
                return redirect('admin/dangnhap');
        
    }
}
