<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Car;
use Faker\Generator as Faker;

$factory->define(Car::class, function (Faker $faker) {
    return [
        // $table->string('brand');
        // $table->string('model');
        // $table->integer('year');
        // $table->integer('maxSpeed');
        // $table->boolean('isAutomatic');
        // $table->string('engine');
        // $table->string('numbersOfDoors');
        // $table->timestamps();
        'brand' => $faker->name(),
        'model' => $faker->name(),
        'year' => $faker->numberBetween($min = 1900, $max = 2021),
        'maxSpeed' => $faker->numberBetween($min = 130, $max = 330),
        'isAutomatic' => $faker->boolean($chanceOfGettingTrue = 30),
        'engine' => $faker->name,
        'numbersOfDoors' => $faker->numberBetween($min = 3, $max = 5)

    ];
});
