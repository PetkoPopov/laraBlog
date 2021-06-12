<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
       'title'=>$faker->sentence(rand(3,6)),
        'content'=>implode(' ',$faker->paragraphs(rand(3,8))),
        'user_id'=>1
    ];
});
