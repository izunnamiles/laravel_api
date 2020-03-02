<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Review;
use App\Product;
use Faker\Generator as Faker;

$factory->define(Review::class, function (Faker $faker) {
    return [
        //

        "product_id" => Product:: count() ? Product::pluck('id')->random() : factory(Product::class)->create(),
        "customer" => $faker->name,
        "review" => $faker->paragraph,
        "star" => $faker->numberBetween(0,5)
    ];
});
