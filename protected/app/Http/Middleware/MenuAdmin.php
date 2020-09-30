<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Route;


use Closure;

class MenuAdmin
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
            $user = Auth::user();
            if ($user->lavel == 1) 
            {
                return $next($request);
            }
            else 
                return redirect()->back();
        }
        else
                return redirect('admin/dangnhap');
    }
}
