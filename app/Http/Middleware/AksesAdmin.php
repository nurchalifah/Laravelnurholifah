<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

<<<<<<< HEAD
=======

>>>>>>> c3ef07fcdcda99f9c9a154becd23aaad128a8511
class AksesAdmin
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
        if(Auth::user()->akses == 'admin'){
<<<<<<< HEAD
            return $next($request);
=======
        return $next($request);
>>>>>>> c3ef07fcdcda99f9c9a154becd23aaad128a8511
    }

    return abort(404);
}
<<<<<<< HEAD

}
=======
}
>>>>>>> c3ef07fcdcda99f9c9a154becd23aaad128a8511
