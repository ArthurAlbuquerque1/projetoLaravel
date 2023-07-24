<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;
use App\SiteContato;



$factory->define(SiteContato::class, function (Faker $faker) {
  return [
    'nome' => $this->faker->name,
    'telefone' => $this->faker->tollFreePhoneNumber,
    'email' => $this->faker->unique()->email,
    'motivo_contato' => $this->faker->numberBetween(1, 3),
    'mensagem' => $this->faker->text(200)
  ];
});
