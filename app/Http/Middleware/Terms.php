<?php

namespace App\Http\Middleware;

use Closure;

class Terms
{
   
    public function handle($request, Closure $next)
    {
        $usuarioLogado = \Auth::user()->terms;

        if($usuarioLogado == 0) {
            return redirect()->route('terms.index');
        }

        return $next($request);
    }
}
