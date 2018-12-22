<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    | 이 컨트롤러는 응용 프로그램의 사용자 인증을 처리하고  
    | 홈 화면으로 리디렉션합니다. 컨트롤러는 trait를 사용합니다.
    | 편리하게 응용 프로그램에 기능을 제공합니다.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *  로그인 후 사용자를 리디렉션 할 위치.
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
