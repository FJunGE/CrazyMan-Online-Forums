<?php

namespace App\Http\Middleware;

use Closure;
use Alert;

class EnsureEmailIsVerified
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
        // 满足以下条件
        // 1.用户已经登陆
        // 2.用户访问的不是 email开头的路由，也不是登出
        // 3.用户还没有通过邮件验证
        if ($request->user() && !$request->is('email/*','logout') &&  !$request->user()->hasVerifiedEmail()){

            // 邮箱还没验证，生成未验证邮件闪存
            $request->session()->flash('warning',"在继续之前请先验证您的 E-mail。 如果您没有收到, .<a href='/email/resend'>点击重新发送 E-mail.</a>");

            // 用户点击闪存中的发送邮件
            if (session('resent')){
                alert()->success('邮件已经发送，请前往邮箱验证');
            }
        }
        return $next($request);
    }
}
