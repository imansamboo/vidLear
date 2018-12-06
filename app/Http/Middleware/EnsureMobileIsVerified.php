<?php
/**
 * Created by PhpStorm.
 * User: iman
 * Date: 12/5/18
 * Time: 9:50 PM
 */

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Cookie\Middleware\EncryptCookies as Middleware;


class EnsureMobileIsVerified extends Middleware
{
    public function handle($request, Closure $next)
    {
        if (!$request->user() ||
            ($request->user()->sms_varified != 1))
        {
            return $request->expectsJson()
                ? abort(403, 'Your mobile number  is not verified.')
                : Redirect::route('verification.notice');
        }

        return $next($request);
    }

}