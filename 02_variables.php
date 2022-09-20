<?php
/*  
-------------------- PHP Data Types ------------------
- String          series of characters surrounded by quotes
- Interger        Whole numbers
- Float           Decimal numbers
- Boolean         true or false
- Array           Special variable, which can hold more than one value
- Object          A class
- NULL            Empty variable
- Resource        Special variable that holds a resource
*/

 /* ---------------- Variable Rules --------------------
- Variables must be prefixed with $
- Variables must start with a letter or the underscore character
- Variables can't start with a number 
- Variables can only contain alpha-numeric characters and underscore (A-z, 0-9, and _ )
- Variables are case-sensitive ($name and $NAME are two different variables)  
 */

 $name = 'Alan Matthias'; // String
 $age = 33; // Int
 $has_kids = true; // Bool
 $cash_on_hand = 20.75; //Float

 //var_dump($cash_on_hand);
 
 //echo $name . ' is ' . $age . ' years old';

 //echo "$name is $age years old";

 //echo "${name} is ${age} years old";

$y = '30' + '3';
//var_dump($y);
//echo 30 - 5;
//echo 5 * 8;
//echo 10 / 7;
//echo 20 % 12;

/*
define('Host', 'localhost');
define('DB_NAME', 'dev_db');

echo Host;
*/

?>