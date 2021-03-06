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

/* 실험용 이벤트 함수... 주석처리해둠
DB::listen(function ($query){
    var_dump($query->sql);
  }); */

Route::resource('articles', 'ArticlesController');
Route::get('/', 'WelcomeController@index')->name('home');

Route::get('auth/login', function () {
    $credential = [
        'email' => 'john@example.com',
        'password' => 'password'
    ];

    if (! auth()->attempt($credential)) {
        return '로그인 정보가 정확하지 않습니다.';
    }

    return redirect('protected');
});

Route::get('protected', ['middleware' => 'auth', function () {
    return '로그인했어요'.auth()->user()->name;
}]);

Route::get('auth/logout', function () {
    auth()->logout();
    return '또 봐요~';
});


// Route::get('/{para?}', function ($text = 'fail') {
//     return $text;
// })->where('para', '[0-9a-zA-Z]{4}');





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
