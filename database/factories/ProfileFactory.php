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
        'icon' => 'https://images.unsplash.com/photo-1592919933511-ea9d487c85e4?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=400&fit=max&ixid=eyJhcHBfaWQiOjE1ODB9',
        'image' => 'https://pixabay.com/get/57e1d14a4354ae14f1dc8460962933761437d6e14e507749762972dd964fc1_640.jpg',
        'birthday' => $faker->dateTimeBetween($startDate = '-110 years', $endDate = 'now')->format('Y年m月d日')
    ];
});
