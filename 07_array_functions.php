<?php
// Array Functions : Funcion de Matriz

$fruits = ['apple', 'orange', 'pear'];
// Get length
// echo count($fruits);

// Search array
// var_dump(in_array('apple', $fruits));

// Add to array
$fruits[] = 'grape';
array_push($fruits, 'blueberry', 'strawberry');
array_unshift($fruits, 'melocoton');


// Remove from array
array_pop($fruits);
array_shift($fruits);
unset($fruits[2]);


// Split into 2 chunks 
$chunked_array = array_chunk($fruits, 2);
// print_r($chunked_array);
// print_r($fruits);


$arr1 = [ 1,2,3];
$arr2 = [4,5,6];
$arr3 = array_merge($arr1, $arr2);
$arr4 = [...$arr1, ...$arr2];
// print_r($arr3);
// print_r($arr4);


// Matriz combinada:
$a = ['green', 'red', 'yellow'];
$b = ['avacado', 'apple', 'banana'];

$c = array_combine($a, $b);
// print_r($c);

$keys = array_keys($c);
// print_r($keys);

$flipped = array_flip($c);
// print_r($flipped);


// Mapa de Matriz:
$numbers = range(1, 20);

$newNumbers = array_map(function($number) {
    return "Number ${number}";
}, $numbers);
// print_r($newNumbers);

$lessThan10 = array_filter($numbers, fn($number) => 
$number <= 10);
// print_r($lessThan10);

$sun = array_reduce($numbers, fn($carry, $number) => 
$carry + $number);

var_dump($sun);
?>















