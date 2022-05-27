<?php

namespace App\Http\Middleware;
use Closure;
use Illuminate\Http\Request;
use SebastianBergmann\Type\Exception;
use Tymon\JWTAuth\Facades\JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;


class JwtMiddleware
{
   /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
      try {
          $user = JWTAuth::parseToken()->autenticate();
      } 
      catch (Exception $e)
      {
          if($e instanceof \Tymon\JWTAuth\Exceptions\tokenInvalidException){
          return response()->json(["msg"=>"Invalid"]);
          }
          if($e instanceof \Tymon\JWTAuth\Exceptions\tokenExpiredException){
          return response()->json(["msg"=>"Token is Expired"]);
          }
          return response()->json(["msg"=>"Token not found"]);
      }
        return $next($request);
    }
}
