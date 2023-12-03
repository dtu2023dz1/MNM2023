<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleWare
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $check = Auth::guard('admin')->check();
        if($check) {
            $user = Auth::guard('admin')->user();
            if($user->is_open == 1) {
                return $next($request);
            } else {
                toastr()->error("Tài Khoản của bạn đã bị khóa!");
                return redirect('/admin/login');
            }
        } else {
            toastr()->error("Vui lòng đăng nhập để có thể sử dụng hệ thống!");
            return redirect('/admin/login');
        }
    }
}
