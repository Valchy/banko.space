<?php

// Tinkerwell only prints one thing
// Always prints the last variable

// Get user with id less or equal to 5
// User::query()->where('id', '<=', 5)->get()->pluck('name');

// Get single user with id 2
// User::query()->where('id', 2)->get();

// User::query()->where('id', 1)->orWhere('id', 4)->get();

// $articles = collect([
//   ['name' => 'Valeri', 'age' => 20],
//   ['name' => 'Viki', 'age' => 19]
// ]);

// $articles->map(function($item) {
//   return $item['name'] . ' is ' . $item['age'] . ' years old.';
// });

// Factories
User::factory(10)->create();
Account::factory(10)->create();
Account::all()->pluck('user')->pluck('email');

Transaction::factory(5)->create();
