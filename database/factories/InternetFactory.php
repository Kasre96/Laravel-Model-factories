<?php

use Faker\Generator as Faker;
use App\Internet;

$factory->define(Internet::class, function (Faker $faker) {
    return [
        // Set fake details for the data
        'safeEmail' => $faker->safeEmail,
        'domainName' => $faker->domainName,
        'url' => $faker->url,
        'ipv6' => $faker->ipv6
    ];
});
