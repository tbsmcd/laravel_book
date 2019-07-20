<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Bookdetail::class, function (Faker $faker) {
    $now = \Carbon\Carbon::now();
    return [
        'isbn' => $faker->isbn13,
        'published_date' => $faker->date($format = 'Y-m-d', $max = $now),
        'price' => $faker->randomNumber(4),
        'created_at' => $now,
        'updated_at' => $now
    ];
});
