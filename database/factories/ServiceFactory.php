<?php

use Faker\Generator as Faker;

$factory->define(App\Service::class, function (Faker $faker) {

    $title = $faker->sentence(4);
    $lastName = $faker->sentence(3);

    return [
        'user_id' 		=> rand(1,30),
        'name' 			=> $title,
        'short_name' 	=> $lastName,
        'slug' 			=> str_slug($title),
        'question_1' 		=> $faker->text(200),
        'question_2' 			=> $faker->text(500),
        'file' 			=> $faker->imageUrl($width = 1200, $height = 400),
        'status'        => $faker->randomElement(['DRAFT', 'PUBLISHED'])
    ];

});
