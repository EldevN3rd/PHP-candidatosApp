<?php
/* --------------------- OOP = Programacion Orientda a Objetos --------------------- */

/* 
From PHP5 onwards you can write PHP in either a procedural or object orientd way.
OOP consists of clases that can hold "properties" and "methods".
Objects can be created from classes.
*/

class User {
    // Properties are attributes tahta belong to a class

    // Access Modifiers: public, private, protected
    // Public: can be accessed from anywhere
    // Private: can only be accessed from inside the class
    // Protected: can only be accessed from inside the class and by inheriting classes 

    public $name;
    public $email;
    public $password;

    // Method is a 



}



// Instatiate a user Object
$user1 = new User();
$user2 = new User();

$user1->name = 'Alan Matt';


var_dump($user1);
 


?>