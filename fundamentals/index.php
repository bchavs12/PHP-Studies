<?php
$books = [
    [
        'name' => 'Do Androids Dream of Electric Sheep',
        'author' => 'Philip K. Dick',
        'releaseYear' => 1972,
    ],
    [
        'name' => 'Do Androids Dream of Electric Sheep',
        'author' => 'Philip K. Dick',
        'releaseYear' => 1968,
    ],
    [
        'name' => 'Project Hail Mary',
        'author' => 'Andy Weir',
        'releaseYear' => 2013,
    ],
    [
        'name' => 'The Nicolas',
        'author' => 'Edward',
        'releaseYear' => 2018,
    ],
    [
        'name' => 'The French',
        'author' => 'Edward',
        'releaseYear' => 2005,
    ],
    [
        'name' => 'The Martian',
        'author' => 'Andy Weir',
        'releaseYear' => 2008,
    ],
];

/*
function filter($items, $key, $value)
{
    $filteredItems = [];

    foreach ($items as $item) {
        if ($item[$key] === $value) {
            $filteredItems[] = $item;
        }
    }

    return $filteredItems;
}

$filtedByAuthor = filter($books, 'author', 'Andy Weir');
*/

// Flexible statement
function filter($items, $callBack)
{
    $filteredItems = [];

    foreach ($items as $item) {
        if ($callBack($item)) {
            $filteredItems[] = $item;
        }
    }

    return $filteredItems;
}

$filtedByAuthor = filter($books, function($book){
    return $book['author'] === 'Edward';
});

// $filtedByDate = filter($books, function($book){
//     return $book['releaseYear'] >= 2000 && $book['releaseYear'] <= 2010;
// });

// Built-in funcition PHP (Make the same of our normal function)
$filtedByDate = array_filter($books, function ($book) {
    return $book['releaseYear'] >= 2000 && $book['releaseYear'] <= 2020;
});

require('./index.view.php');
