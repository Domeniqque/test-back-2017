<?php

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

$factory->define(App\Doctor::class, function (Faker $faker) {
    $item = rand(1, 3);

    return [
        'name' => $faker->name,
        'phone' => $faker->phoneNumber,
        'description' => $faker->text,
        'speciality' => ucfirst($faker->word),
        'photo' => asset("image/team-{$item}.png")
    ];
});
