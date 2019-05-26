<?php

use Faker\Generator as Faker;

$factory->define(BetterLife\Cause::class, function (Faker $faker) {
  $name = $faker->sentence(2);
    return [
      'name'=> $name,
      'description' => $faker->text(100),
      'status' => rand(0,1),
      'goal' => rand(10000,100000),
      'current_money' => rand(0,10000),
      'created_at' => now(),
    ];
});
