<?php
/* ---------------- For Loop --------------- */
/*
** For Loop Syntax
for (initialize; condition; increment) {
    //code to be executed
};
*/

/*
// Loop for
for($y = 0; $y <= 10; $y++) {
    echo 'Number ' . $y . '<br>';
};
*/ 

/*
//Loop while
$while = 1;

while($while <= 15) {
    echo 'Number ' . $while . '<br>';
    $while++;
};
*/

/*
//Loop Do While
//Do...While lopp will always executed the block of code once, even if the condition is false 
 

Do While Loop Syntax
do {
    //code to be executed
} while(condition);
*/

/*
$x = 1;
 do {
    echo 'Number ' . $x . '<br>';
    $x++;
 } while($x <= 5);
*/

/*
// Foreach Loop
 
** Foreach Loop Syntax
foreach ($array as $value) {
    //code to be executed
}
*/

/* 
$post = ['First Post', 'Second Post', 'Third Post'];

for($x = 0; $x < count($post); $x++) {
    echo $post[$x];
};


foreach($post as $post) {
    echo $post;
};


foreach($post as $index => $posts) {
    echo $index + 1 . ' - ' . $post . '<br>';
};
*/

$person = [
    'first_name' => 'Alan',
    'last_name' => 'Duarte',
    'email' => 'im.h1pst@gmail.com',
    'profession' => 'SoftwareEngineer',
    'Country' => 'Colombia',
];

foreach($person as $key => $value) {
    echo "$key - $value<br>";
}

?>




