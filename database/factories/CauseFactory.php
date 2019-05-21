<?php

use Faker\Generator as Faker;

$factory->define(BetterLife\Cause::class, function (Faker $faker) {
  $name = $faker->sentence(2);
    return [
      'name'=> $name,
      'description' => $faker->text(100),
      'status' => rand(0,1),
      'goal' => rand(1000,100000),
      'current_money' => 0,
      'created_at' => now(),
    ];
});
