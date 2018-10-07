<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});


$factory->define(App\Clientsource::class, function (Faker\Generator $faker) {
   return [
        'code' =>  strtoupper(substr($faker->name,0,2)),
        'sname' => $faker->name,
    ];
});


$factory->define(App\Proposaltype::class, function (Faker\Generator $faker) {
    return [
         'code' =>  strtoupper(substr($faker->name,0,2)),
         'tname' => $faker->name,
     ];
 });


 $factory->define(App\Technicalapproval::class, function (Faker\Generator $faker) {
    return [
         'code' =>  strtoupper(substr($faker->name,0,2)),
         'aname' => $faker->name,
     ];
 });