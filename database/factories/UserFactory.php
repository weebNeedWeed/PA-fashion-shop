<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;

$factory->define(User::class, function (Faker $faker) {
  return [
    "email" => $faker->email(),
    "password" => bcrypt("12345"),
    "address" => $faker->address(),
    "phone_number" => $faker->phoneNumber(),
    "name" => $faker->name()
  ];
});
