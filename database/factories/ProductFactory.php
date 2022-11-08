<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
  return [
    "name" => $faker->sentence(),
    "description" => $faker->paragraph(),
    "price" => $faker->numberBetween(1000, 100000),
    "image" => $faker->imageUrl(),
    "slug" => $faker->slug()
  ];
});
