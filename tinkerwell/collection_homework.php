<?php
/*
Make a nested collection containing 5 persons (['firstname' => 'xxx', 'familyname' => 'yyy']), sort it alphabetically by firstname
*/

$collection = collect([
  ['firstname' => 'Valchy', 'familyname' => 'Johnson'],
  ['firstname' => 'Zack', 'familyname' => 'Burn'],
  ['firstname' => 'Adam', 'familyname' => 'Sandler'], 
  ['firstname' => 'Bob', 'familyname' => 'the Builder'],
  ['firstname' => 'Peter', 'familyname' => 'Smith'],
]);

$collection->sortBy('firstname');



// Use the same collection, sort it by lastname in descending order
$collection->sortByDesc('familyname');



/*
Make a nested collection containing 5 persons (name, nr_of_kids, age). Order it by nr of kids. Filter it so only persons older than certain age are kept in.
*/

$collection = collect([
  ['name' => 'Valchy', 'nr_of_kids' => 5, 'age' => 36],
  ['name' => 'Zack', 'nr_of_kids' => 4, 'age' => 22],
  ['name' => 'Adam', 'nr_of_kids' => 2, 'age' => 40], 
  ['name' => 'Bob', 'nr_of_kids' => 1, 'age' => 18],
  ['name' => 'Peter', 'nr_of_kids' => 10, 'age' => 61],
]);

$collection->sortBy('nr_of_kids')->filter(function($item) {
  return $item['age'] > 25;
});



/*
Make a nested collection, containing 5 persons (name, length, weight). Add a bmi property (bmi, body mass index =weight / length^2 (weight in kg, length in m). Sort by bmi, ascending. (hint: use each)
*/

$collection = collect([
  ['name' => 'Valchy', 'length' => 1.88, 'weight' => 68],
  ['name' => 'Zack', 'length' => 1.77, 'weight' => 90],
  ['name' => 'Adam', 'length' => 1.90, 'weight' => 74], 
  ['name' => 'Bob', 'length' => 1.66, 'weight' => 62],
  ['name' => 'Peter', 'length' => 1.79, 'weight' => 85],
]);

$collection->map(function($item) {
  $item['bmi'] = $item['weight'] / ($item['length'] * $item['length']);
  return $item;
})->sortBy('bmi');



/*
Using the same collection. Return a single string per person - e.g. "Person NAME, has a bmi of BMI". Hint: use map()
*/

$collection->map(function($item) {
  $item['bmi'] = $item['weight'] / ($item['length'] * $item['length']);
  return 'Person ' . $item['name'] . ', has a bmi of ' . $item['bmi'];
});













