<?php

use Illuminate\Foundation\Inspiring;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
| 이 파일은 모든 Closure 기반 콘솔 명령을 정의 할 수있는 곳입니다.
| 각 Closure는 각 명령의 IO 메소드와 상호 작용할 수있는 간단한 방법을 허용하는 명령 인스턴스에 바인딩됩니다.
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->describe('Display an inspiring quote');
