<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class middleware3
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if($request->input("year") == "2023"){
            echo "<div class='alert alert-success'>
                <b>Success : </b> Valid Year
            </div>";
        }else{
            return redirect("/error");
        }
        return $next($request);
    }
}
