<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\CheckForMaintenanceMode as Middleware;

class CheckForMaintenanceMode extends Middleware
{
    /**
     * The URIs that should be reachable while maintenance mode is enabled.
     * 유지 관리 모드가 활성화되는 동안 도달 할 수 있어야하는 URI입니다.
     * @var array
     */
    protected $except = [
        //
    ];
}
