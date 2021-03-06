<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\sContracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    public function articles() 
    {
        return $this->hasMany(Article::class);
    }


    /**
     * The attributes that are mass assignable.
     * 대량할당할 수 있는 속성
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     * 배열로 숨겨야할 속성
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}


