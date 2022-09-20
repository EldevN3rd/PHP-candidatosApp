<?php
/* 
Arrays 
Las matrices son tipos de datos o estructuras de datos que contienen multiples valores
*/


//Simple arrays
$numbers = [1,72, 89, 235];
$fruits = array('apple', 'orange', 'pear');

// var_dump($numbers);
// echo $fruits[0];

// Associative Arrays
$colors = [
    1 => 'green',
    2 => 'blue',
    3 => 'violet'
];

// echo $colors[4];
// echo $hex['blue'];



// Matrices asociativas para datos tabulares similares especcialmente cuando estamos trabajando con BASE DE DATOS con entradas a blogs o usuarios
$person = [
    'first_name' => 'Alan',
    'last_name' => 'Duarte',
    'email' => 'im.h1pst@gmai.com',
    'profession' => 'SoftwareEngineer',
    'Country' => 'Colombia',
    'celphon' => '057 xxx xxx xx xx',
    'city' => 'xxxxxx',
];
// echo $person['first_name'];

$people = [
    [
        'first_name' => 'Franchesca',
        'last_name' => 'Fiorery',
        'email' => 'franchfio@gmai.com',
        'profession' => 'SoftwareEngineer',
        'Country' => 'Paris',
        'celphon' => '00 33 1 40 xx xx xx.',
        'city' => 'xxxxxx',
    ],
    [
        'first_name' => 'Duman',
        'last_name' => 'Bord',
        'email' => 'dumansoft@gmai.com',
        'profession' => 'SoftwareEngineer',
        'Country' => 'Espana',
        'celphon' => '00 34 600 xx xx xx.',
        'city' => 'xxxxxx',
    ],
    [
        'first_name' => 'Wesley',
        'last_name' => 'Dunvher',
        'email' => 'dunvherdevops@gmai.com',
        'profession' => 'SoftwareEngineer',
        'Country' => 'England',
        'celphon' => ' 0044 700 xxx xx xx',
        'city' => 'xxxxxx',
    ],
];

// echo $people[1]['email'];

// var_dump(json_encode($people));
?>

