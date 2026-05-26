<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if($this->isAdmin($request)) {
            return $next($request);
        }

        abort(403, 'You are not allowed to access this page.');
    }

    private function isAdmin(Request $request): bool
    {
        return $request->user()->admin() === true;
    }
}
