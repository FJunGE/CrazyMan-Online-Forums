<?php

namespace App\Http\Middleware;

use Closure;
use alert;

class LimitFromRepeatSubmit
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
        $token = $request->get('from_token');
        if (cache()->has($token)){
            alert()->danger('请勿重复提交');
            return back();
        }

        cache([$token=>'value'],1);
        return $next($request);
    }
}
