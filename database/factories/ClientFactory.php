<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Client;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

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

$factory->define(Client::class, function (Faker $faker) {
    return [
        'nom_client' => $faker->name,
        'nom_contact' => $faker->name,
        'fonction_contact' => $faker->city,
        'type' => $faker->boolean() ? 'simple': 'entreprise',
        'adresse_facturation' => $faker->streetAddress,
        'tva' =>$faker->numberBetween(1, 10) ,
        'remise' => $faker->numberBetween(1, 10) ,
        'email_primaire' =>  $faker->unique()->safeEmail,
        'email_secondaire' =>  $faker->unique()->safeEmail,

        'remarque' =>  $faker->paragraph(),
        'mobile_phone' => $faker->numberBetween(1000000000, 9000000000),
        'code_client' => $faker->numberBetween(10000, 90000),

    ];
});
