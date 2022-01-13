<?php
$collection = collect(['Nico', 'Aster', 'Iben', 'Merel']);

$filtered = $collection->filter( function($item) {
  return false;
} );

$filtered = $collection->filter( function($item) {
  return substr($item,0,1) === 'A';
} );


$collection= collect([
  ['name' => 'Nico', 'age' => 41],
  ['name' => 'Aster', 'age' => 11],
  ['name' => 'Iben', 'age' => 9], 
  ['name' => 'Merel', 'age' => 12],
]);


$filtered = $collection->filter( function($item) {
  return $item['age'] >= 12 ;
} );

$filtered->values();


///////////////
$collection= collect([
  ['country' => 'Belgium', 'university' => 'Vrije Universiteit Brussel'],
  ['country' => 'Denmark', 'university' => 'Aalborg Universitet'],
  ['country' => 'Germany', 'university' => 'Ludwig Maximilans Universität München'], 
  ['country' => 'Spain', 'university' => 'Harbour.Space University'],
]);

$collection->pluck('university')


$collection= collect([
            ['country' => 'Belgium',
                'university' => 'Vrije Universiteit Brussel',
                'faculties' => ['engineering', 'education'],
            ],
            ['country' => 'Denmark',
                'university' => 'Aalborg Universitet',
                'faculties' => ['engineering']
            ],
            ['country' => 'Germany',
                'university' => 'Ludwig Maximilans Universität München',
                'faculties' => ['informatics']
            ],
            ['country' => 'Spain',
                'university' => 'Harbour.Space University',
                'faculties' => [],
            ],
        ]);

        return $collection->pluck('faculties')->flatten()->unique()->values()->toArray();


///////
        $collection = collect(['Nico', 'Aster', 'Iben', 'Merel']);

        $check = $collection->contains( function($item) {
            return substr($item,3,1) === 'e';
        });

        return $check ? 'true' : 'false';


        $collection= collect([
            ['name' => 'Nico', 'age' => 41],
            ['name' => 'Aster', 'age' => 11],
            ['name' => 'Iben', 'age' => 9],
            ['name' => 'Merel', 'age' => 12],
        ]);

        $check = $collection->contains( function($item) {
            return $item['age'] >= 100;
        });

return $check ? 'true' : 'false';


////////
        $collection = collect(['Nico', 'Aster', 'Iben', 'Merel', 'Pol', 'Eliana', 'Esra']);

        [$long, $short] = $collection->partition( function($item) {
            return strlen($item) > 4;
        });

        return [$long->values(), $short];

////
$collection = collect([
            [
                'title' => 'First day',
                'author' => 'Nico',
            ],
            [
                'title' => 'Second day',
                'author' => 'Merel',
            ],
            [
                'title' => 'Third day',
                'author' => 'Iben',
            ],
            [
                'title' => 'Forth day',
                'author' => 'Aster',
            ],
            [
                'title' => 'Fifth day',
                'author' => 'Nico',
            ],
        ]);


$collection = $collection->map( fn($item) => $item['title'].' by '.$item['author']);


        $chunks = $collection->chunk(2);


$chunks->map( fn($chunk) => $chunk->values() );