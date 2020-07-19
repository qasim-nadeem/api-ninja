<?php

namespace App\Http\Middleware;

use App\App;
use Closure;
use Illuminate\Support\Facades\Session;

class CheckGuestAppAccess
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
        $appId = $request->id;
        if($app = App::find($appId))
        {
            if($app->user_session_id != Session::getId())
                return redirect()->route('home');
        }
        else
        {
            return redirect()->route('home');
        }
        return $next($request);
    }
}
