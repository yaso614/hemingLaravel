<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\VerifiesEmails;

class VerificationController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Email Verification Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling email verification for any
    | user that recently registered with the application. 
    | 이 컨트롤러는 최근에 애플리케이션에 등록된 유저의 email 인증을 책임임이 있다. 
    | Emails may also be re-sent if the user didn't receive the original email message.
    | 또한 만약 유저가 원본 오리지날 이메일 메세지를 받지 못한다면 이메일은 재전송된다.
    */

    use VerifiesEmails;

    /**
     * Where to redirect users after verification.
     * 확인 후 사용자를 리디렉션 할 위치입니다.
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
        $this->middleware('auth');
        $this->middleware('signed')->only('verify');
        $this->middleware('throttle:6,1')->only('verify', 'resend');
    }
}
