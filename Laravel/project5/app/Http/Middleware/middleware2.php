<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class middleware2
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if($request->input("age") !== null && $request->input("age") >= 18){
            echo "<div class='alert alert-success'>
                <b>Success : </b> Valid Age
            </div>";
        }else{
            echo "<div class='alert alert-danger'>
                <b>Error : </b> invalid Age
            </div>";
        }
        return $next($request);
    }
}
