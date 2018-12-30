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
Route::resource('articles','ArticlesController');
Route::get('/', 'WelcomeController@index');

Route::get('/son', function () {
    return redirect(route("father"));
});


// Route::get('/{para?}', function ($text = 'fail') {
//     return $text;
// })->where('para', '[0-9a-zA-Z]{4}');




