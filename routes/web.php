<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
| 여기에 애플리케이션을 위한 웹 경로를 등록 할 수있는 곳이 있습니다.
| 이 경로는 "web"미들웨어 그룹을 포함하는 그룹 내의 RouteServiceProvider에 의해로드됩니다.
| 이제 멋진 것을 만들어보세요!
*/

/* 
  para URL 파라미터를 아라비아 숫자, 영어 소문자, 영어 대문자로
  구성된 3글자로 한정하는 정규표현식을 이용한 URL파라미터 패턴
*/
// Route::pattern('para', '[0-9a-zA-Z]{3}');

Route::get('/', [
    'as' => 'father',
    function () {
        return view('welcome',[
            'weapone' => '낡은장검',
            'armor' => '체인메일',
        ]);
    }
]);

Route::get('/son', function () {
    return redirect(route("father"));
});


// Route::get('/{para?}', function ($text = 'fail') {
//     return $text;
// })->where('para', '[0-9a-zA-Z]{4}');




