<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\TrimStrings as Middleware;

class TrimStrings extends Middleware
{
    /**
     * The names of the attributes that should not be trimmed.
     * trim되어서는 안되는 attributes의 names들
     * @var array
     */
    protected $except = [
        'password',
        'password_confirmation',
    ];
}
