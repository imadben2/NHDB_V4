<?php

namespace App\Http\Middleware;

use Closure;

class TwoFA
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



        $valeur = session('clef');

        dd($valeur);
        if ($valeur == 'login') {

            return $next($request);
        }
        //  if(auth()->user()->isVerified){
        //      return $next($request);
        //  }

        return redirect('/VerifyOtp');
    }
}
