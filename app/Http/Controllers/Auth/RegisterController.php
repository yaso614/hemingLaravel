<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    | 이 컨트롤러는 새로운 사용자와 그 사용자의 등록을 처리합니다.
    | 그뿐아니라 검증 및 생성까지. 기본적으로 이 컨트롤러는 trait를 사용하여
    | 추가 코드없이도 이 기능을 제공할수 있다.
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     * 등록 후 사용자를 리디렉션 할 위치.
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     * 새 컨트롤러 인스턴스를 만듭니다.
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *들어오는 등록 요청에 대한 유효성 검사기를 가져옵니다.
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     * 유효한 등록 후에 새 사용자 인스턴스를 만듭니다.
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
