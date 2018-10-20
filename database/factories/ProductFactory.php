<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Product::class, function (Faker $faker) {
    //为变量规定随机值：
    $image = $faker->randomElement([
    	"https://lccdn.phphub.org/uploads/images/201806/01/5320/7kG1HekGK6.jpg",
        "https://lccdn.phphub.org/uploads/images/201806/01/5320/1B3n0ATKrn.jpg",
        "https://lccdn.phphub.org/uploads/images/201806/01/5320/r3BNRe4zXG.jpg",
        "https://lccdn.phphub.org/uploads/images/201806/01/5320/C0bVuKB2nt.jpg",
        "https://lccdn.phphub.org/uploads/images/201806/01/5320/82Wf2sg8gM.jpg",
        "https://lccdn.phphub.org/uploads/images/201806/01/5320/nIvBAQO5Pj.jpg",
        "https://lccdn.phphub.org/uploads/images/201806/01/5320/XrtIwzrxj7.jpg",
        "https://lccdn.phphub.org/uploads/images/201806/01/5320/uYEHCJ1oRp.jpg",
        "https://lccdn.phphub.org/uploads/images/201806/01/5320/2JMRaFwRpo.jpg",
        "https://lccdn.phphub.org/uploads/images/201806/01/5320/pa7DrV43Mw.jpg",
    ]);
    //实际生成的值
    return [
        'title' => $faker->word,
        'description' => $faker->sentence,
        'image' => $image,
        'on_sale' => true,
        'rating' => $faker->numberBetween(0,5),
        'sold_count' => 0,
        'review_count' => 0,
        'price' => 0,
    ];
});
