<?php

/**
 * Laravel - A PHP Framework For Web Artisans
 * 라라벨 - 웹 장인을 위한 PHP 프레임워크
 * @package  Laravel
 * @author   Taylor Otwell <taylor@laravel.com>
 */

define('LARAVEL_START', microtime(true));

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader for　our application. 
| Composer는 우리 애플리케이션에 편리한 자동으로 생성 된 클래스 로더를 제공합니다.
|
| We just need to utilize it! 우리는 그것을 활용할 필요가 있습니다!
| We'll simply require it into the script here so that we don't have to worry about manual
| loading any of our classes later on. 
| 우리는 수동 스크립트에 대해 걱정할 필요가 없도록 여기에 스크립트를 입력하기 만하면됩니다.
| 나중에 클래스를로드합니다.
*/

require __DIR__.'/../vendor/autoload.php';

/*
|--------------------------------------------------------------------------
| Turn On The Lights
|--------------------------------------------------------------------------
|
| We need to illuminate PHP development, so let us turn on the lights.
| This bootstraps the framework and gets it ready for use, then it
| will load up this application so that we can run it and send
| the responses back to the browser and delight our users.
|
*/

$app = require_once __DIR__.'/../bootstrap/app.php';

/*
|--------------------------------------------------------------------------
| Run The Application
|--------------------------------------------------------------------------
|
| Once we have the application, we can handle the incoming request
| through the kernel, and send the associated response back to
| the client's browser allowing them to enjoy the creative
| and wonderful application we have prepared for them.
| 일단 우리가 응용 프로그램을 가지고,
| 우리는 커널을 통해 들어오는 요청을 처리 할 수 있습니다. 
| 관련 응답을 고객의 브라우저로 보내면 그들이 우리가 준비한 창의적이고 훌륭한 응용 프로그램을 즐길 수 있습니다.
| 
*/

$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
);

$response->send();

$kernel->terminate($request, $response);
