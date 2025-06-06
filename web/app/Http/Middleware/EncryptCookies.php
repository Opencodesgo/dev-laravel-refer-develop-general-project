<?php
/**
 * App，http中间件，加密Cookie
 */

namespace App\Http\Middleware;

use Illuminate\Cookie\Middleware\EncryptCookies as Middleware;

class EncryptCookies extends Middleware
{
    /**
     * The names of the cookies that should not be encrypted.
     * 不应该加密的cookie的名称
     *
     * @var array
     */
    protected $except = [
        //
    ];
}
