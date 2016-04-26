<?php

namespace cs\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Auth\Guard;

class Authenticate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    protected $auth;
    
    public function __construct(Guard $auth){
        $this->auth=$auth;
    }
    public function handle($request, Closure $next, $role)
    {
        if (!$this->auth->check()) {
            return redirect()->route('auth.login')->with('status','success')->with('message','Please Login');
        }

        if($role == 'all'){
            return $next($request);
        }

        if ($this->auth->guest()|| !$this->auth->user()->hasRole($role)) {
            abort(403);
        }
        return $next($request);
    }
}
