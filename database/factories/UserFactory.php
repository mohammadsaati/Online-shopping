<?php

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

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
        'shop_id' => factory(\App\Shop::class)->create()->id,
    ];
});



$factory->define(App\Post::class, function (Faker $faker) {
    return [
        'title' => $faker->title,
        'passage' => $faker->sentence(10),
    ];
});

$factory->define(App\Photo::class, function (Faker $faker) {
    return [
        'patch' => '/images/mynewphoto.png',
    ];
});

$factory->define(App\Plan::class, function (Faker $faker) {
    return [
       'name' => $faker->title,
        'discription' => 'a new null plan for evry one',
        'time' => 'monthly',



    ];
});


$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'product_name' => $faker->title,
        'product_price' =>$faker->numberBetween(200000 , 500000),
        'product_discription' => 'one product',
    ];
});






$factory->define(App\Submenu::class, function (Faker $faker) {
    return [
        'name' => $faker->name(5),
    ];
});


$factory->define(App\Menu::class, function (Faker $faker) {
    return [
      'name' => $faker->name(5),
        'submenu_id' => factory(\App\Submenu::class)->create()->id,

    ];
});

$factory->define(App\Shop::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'city' => $faker->city,
        'phonenumber' => '09148919361',
        'telegram_id' => 'kkkborf',
        'str_code' => $faker->numberBetween(10,50),
        'adress' => $faker->address,
        'discription' => 'new story',
    ];
});
