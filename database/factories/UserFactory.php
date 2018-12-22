<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for your application.
| 이 디렉터리는 당신의 애플리케이션을위한 model factory 정의가 포함되어야 한다.
| Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
| 팩토리는 당신의 애플리케이션의 데이터베이스를 테스트 / 
| 시드하기위한 새 모델 인스턴스를 생성하는 편리한 방법을 제공합니다.
*/

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
    ];
});
