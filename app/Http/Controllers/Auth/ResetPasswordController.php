<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. 
    | 이 컨트롤러는 암호 재설정 요청을 처리합니다.
    | 이 특징을 포함하기 위해 간단한 특성을 사용합니다.
    | You're free to explore this trait 당신은 이 trait를 자유롭게 탐험할수 있습니다.
    | and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
     * 암호를 재설정 한 후 사용자를 리디렉션 할 위치.
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
        $this->middleware('guest');
    }
}
