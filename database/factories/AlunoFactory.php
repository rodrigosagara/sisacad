<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Modules\Aluno\Models\Aluno;
use App\Modules\Turma\Models\Turma;
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

$factory->define(Aluno::class, function (Faker $faker) {
    return [
        'nome_completo' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'idade' => rand(1,100)
    ];
});
