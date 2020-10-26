<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Profile;
use Faker\Generator as Faker;

$factory->define(Profile::class, function (Faker $faker) {
    return [
        'user_id' => $faker->unique()->numberBetween(1, 20),
        'employment' => $faker->randomElement($array = ['フリーランス', '正社員', 'アルバイト']),
        'language' => $faker->randomElement($array = ['laravel', 'vue', 'react']),
        'location' => $faker->prefecture,
        'appeal' => $faker->realText,
        'future' => $faker->realText,
        'icon' => $faker->imageUrl,
        'image' => $faker->imageUrl,
        'birthday' => $faker->dateTimeBetween($startDate = '-110 years', $endDate = 'now')->format('Y年m月d日')
    ];
});
