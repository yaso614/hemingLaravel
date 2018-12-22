<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;

class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    | 이 컨트롤러는 비밀번호 재설정 이메일 및
    | 이러한 알림을 보내는 데 도움이되는 특성을 포함합니다.
    | 사용자에게 응용 프로그램을 제공 할 수 있습니다. 이 특성을 자유롭게 탐구하십시오.
    */

    use SendsPasswordResetEmails;

    /**
     * Create a new controller instance.
     * 새 컨트롤러 인스턴스를 만듭니다.
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }
}
