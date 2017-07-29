<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        //เช็กดูว่า มีค่าเข้ามาใน Auth หรือไม่ถ้ามีให้ไปที่น่า Home
        //อีกกรณีหาก user ไม่ใช่สถนะ admin ข้อมูลก็จะส่งมาน่า home 
        //คำสั่งredirect('/home') ให้เด้งไปที่หน้า home
        
        if (Auth::guard($guard)->check()) { 
            return redirect('/home');
        }

        return $next($request);
    }
}
