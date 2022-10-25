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

    // A constructor is a method that runs when an object is created
    public function __construct( $name, $email, $password) {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }

    // Method is a function that belongs to a class
    function set_name($name) {
        $this->name = $name;
    }

    function get_name() {
        return $this->name;
    }
}

// Instatiate a user Object
$user1 = new User('Alan', 'alan@gmail.com', '34654');
$user2 = new User('Jhon', 'jhon@gmail.com', 'kflg7');

// $user1->name = 'Alan Matt';

//echo $user1->email;
//echo $user2->name;


//Inheritence
class Employee extends User {
    public function __construct($name, $email, $password, $title)
    {
        parent::__construct($name, $email, $password);
        $this->title = $title;
    }

    public function get_title() {
        return $this->title;
    }
}

$employee1 = new Employee('Sara', 'sara@gmail.com', '48521', 'Manager');

echo $employee1->get_title();


?>