<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use Fideloper\Proxy\TrustProxies as Middleware;

class TrustProxies extends Middleware
{
    /**
     * The trusted proxies for this application.
     * 이 애플리케이션을 위한 신뢰할만한 프록시
     * 
     * @var array
     */
    protected $proxies;

    /**
     * The headers that should be used to detect proxies..
     * 프록시를 탐지하는 데 사용해야하는 헤더.
     *
     * @var int
     */
    protected $headers = Request::HEADER_X_FORWARDED_ALL;
}
