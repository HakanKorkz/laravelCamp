<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AboutGeneralAuth
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure(Request): (Response|RedirectResponse) $next
     * @return Response|RedirectResponse
     */
    public function handle(Request $request, Closure $next): Response|RedirectResponse
    {

        $age = $request->query("age");

        if (!isset($age) && $age < 18 && $request->path()==="about") {
            return redirect("/age?control=true");
        }

        if (!$request->query("control")  && $request->path()==="age") {
            return redirect("/");
        }

        return $next($request);
    }
}
