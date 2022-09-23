<?php

namespace App\Http\Middleware;

use Closure;
use App\Http\Controllers\UsuarioController;

class Accedido
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
        $res = app(UsuarioController::class)->autorizado($request);
        if (!$res && $res['codigo'] > 209) {
            abort($res['codigo'], $res['mensaje']);
        }
        return $next($request);
    }
}
