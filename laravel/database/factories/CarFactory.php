<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Car;
use Faker\Generator as Faker;

$factory->define(Car::class, function (Faker $faker) {
    return [
        'name'=> $faker ->company(),
        'model'=> $faker ->firstName(),
        'price'=> rand(5000,1000000),
        'consumption'=> rand(1,1000),
    ];
});
