<?php

namespace App\Http\Middleware;

use Illuminate\Cookie\Middleware\EncryptCookies as Middleware;

class EncryptCookies extends Middleware
{
    /**
     * The names of the cookies that should not be encrypted.
     * 암호화해서는 안되는 쿠키의 이름.
     * @var array
     */
    protected $except = [
        //
    ];
}
