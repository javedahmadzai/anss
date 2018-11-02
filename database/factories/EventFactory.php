<?php

use Faker\Generator as Faker;

$factory->define(App\Event::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(6),
        'tags' => '2018, International Event',
        'content' => $faker->sentence(30)
    ];
});
