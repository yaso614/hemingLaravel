<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * Indicates whether the XSRF-TOKEN cookie should be set on the response.
     * response에 XSRF-TOKEN 쿠키를 설정해야하는지 여부를 나타냅니다.
     * @var bool
     */
    protected $addHttpCookie = true;

    /**
     * The URIs that should be excluded from CSRF verification.
     * CSRF 검증에서 제외되어야하는 URI.
     * @var array
     */
    protected $except = [
        //
    ];
}
