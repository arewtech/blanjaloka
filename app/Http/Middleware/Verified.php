<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Verified
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {

        if(!Auth::user()->email_verified_at){
<<<<<<< HEAD
            return redirect('/halaman_verifikasi')
=======
            return redirect('email/verify')
>>>>>>> 4d26dc5c2536a724370326f1054053f22d834f13

        }
        return $next($request);
    }
}
