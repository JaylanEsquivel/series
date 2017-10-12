<?php

namespace App\Http\Middleware;

use Closure;

class CheckAdmin {

    public function handle($request, Closure $next, $guard = null) {
        if (\Auth::user()->tipo == 'A') {
            return $next($request);
        }

        throw new \Exception('Sem Autorizacao');
    }

}
