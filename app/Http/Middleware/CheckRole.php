<?php

namespace App\Http\Middleware;

use Closure;

class CheckRole
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
        echo 'Checking your role before starting<br>';
        return $next($request);
    }

    public function terminate($request, $response)
    {
        echo '<br>Updating your role after competion';
    }
}
