<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Shop;
use App\User;
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
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
    ];
});

$factory->define(Shop::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'level' => random_int(1, 10),
    ];
});

$factory->define(\App\Product::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'shop_id' => random_int(1, 50),
        'country_id' => random_int(1, 150),
        'level' => random_int(1, 10),
    ];
});

$factory->define(\App\Manager::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'shop_id' => random_int(1, 50),
        'level' => random_int(1, 10),
    ];
});

$factory->define(\App\Country::class, function (Faker $faker) {
    return [
        'name' => $faker->country,
        'level' => random_int(1, 10),
    ];
});
