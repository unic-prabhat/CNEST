<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

// use App\Model;
use App\ContactList;
use Faker\Generator as Faker;

$factory->define(ContactList::class, function (Faker $faker) {
    return [
      'email' => $faker->companyEmail,
      'first_name' => $faker->firstNameMale,
      'last_name' => $faker->lastName,
      'phone_number' => $faker->e164PhoneNumber,
      'website_url' => $faker->domainName,
      'company_name' => $faker->company,
      'country' => $faker->country,
      'generated_by' => 'biswanath.qtonix'
    ];
});
