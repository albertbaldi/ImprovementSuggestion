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

$factory->define(App\User::class, function (Faker\Generator $faker) {
	$faker = Faker\Factory::create('pt_BR'); 
	return [
	'name' => $faker->name,
	'email' => $faker->email,
	'password' => bcrypt(str_random(10)),
	'rule' => 'user',
	'remember_token' => str_random(10),
	];
});

$factory->define(App\CustomerSize::class, function (Faker\Generator $faker) {
	$faker = Faker\Factory::create('pt_BR'); 
	return [
	'description' => $faker->word,
	];
});

$factory->define(App\Difficulty::class, function (Faker\Generator $faker) {
	$faker = Faker\Factory::create('pt_BR'); 
	return [
	'description' => $faker->word,
	];
});

$factory->define(App\Importance::class, function (Faker\Generator $faker) {
	$faker = Faker\Factory::create('pt_BR'); 
	return [
	'description' => $faker->word,
	];
});

$factory->define(App\Improvement::class, function (Faker\Generator $faker) {
	$faker = Faker\Factory::create('pt_BR'); 
	return [
	'description' => $faker->realText($maxNbChars = 200, $indexSize = 2),
	'product' => $faker->randomElement($array = array ('Educacional','Processo Seletivo','Testis','Biblios','Financeiro')),
	'user_id' => App\User::all()->random()->id,
	'customerSize_id' => App\CustomerSize::all()->random()->id,
	'importance_id' => App\Importance::all()->random()->id,
	'difficulty_id' => App\Difficulty::all()->random()->id,
	];
});
