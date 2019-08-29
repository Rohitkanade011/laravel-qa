<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define(App\Question::class, function (Faker $faker) {
		$title = $faker->sentence(rand(5, 10));
    return [
        'title' => rtrim($title, "."),
        'slug' => str_slug(rtrim($title, ".")),
        'body'	=> $faker->paragraphs(rand(3, 7), true),
        'views'	=> rand(0, 10),
        'answers'=> rand(0, 10),
        'votes'	=> rand(-3, 10)
    ];
});
