<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response as HttpResponse;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param Request                                           $request
     * @param Closure(Request): (HttpResponse|RedirectResponse) $next
     *
     * @return HttpResponse|RedirectResponse
     */
    public function handle(Request $request, Closure $next): HttpResponse|RedirectResponse
    {
        $unauthorizedCode = Response::HTTP_UNAUTHORIZED;

        abort_if(
            Auth::check() && !Auth::user()->is_admin,
            $unauthorizedCode,
            Response::$statusTexts[$unauthorizedCode]
        );

        return $next($request);
    }
}
