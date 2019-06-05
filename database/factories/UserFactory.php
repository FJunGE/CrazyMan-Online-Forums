<?php

use App\Models\User;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    $date_time = $faker->date. ' '.$faker->time;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => bcrypt('huan0579'), // password
        'remember_token' => Str::random(10),
        'describe' => $faker->sentence,
        'company' => $faker->company,
        'gender' => mt_rand(1,2),
        'level' => mt_rand(1,50),
        'avatar' => '/uploads/images/avatar/201904/27/2_1556358973_CewWBYqJc9.jpg',
        'background' => '/uploads/images/background/201904/27/2_1556359062_u0ISuOHEDZ.jpg',
        'created_at' => $date_time,
        'updated_at' => $date_time,
    ];
});
