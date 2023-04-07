<?php

namespace App\Http\Middleware;

use App\Models\Auth\Role;
use Cartalyst\Sentinel\Hashing\BcryptHasher;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Closure;

class SentinelPermission {

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure                 $next
     *
     * @param                           $role
     *
     * @return mixed
     */
	public function handle( $request, Closure $next, $role ) {

        Sentinel::setHasher( new BcryptHasher() );

        $user = Sentinel::getUser();

        if ( ! $user ) {
            return redirect()->guest( '/login' );
        }
        else{
            return $next($request);
        }

        return redirect( 'no-access' );
	}
}
