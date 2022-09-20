<?php
/*
< Less than
> Greater than
<= Less than or equal to
>= Greater than or equal to
== Equal to
=== identical to
!= Not equal to
!== Not identical to 
*/

/* ---------------------If Statements ------------------  */

/*
** If StatemenT Syntax
if (condition) {
    //code to be executed if condtion is true
};
*/

/*
$age = 17;
if ($age >= 18){
    echo 'You are old enough to vote';
} else {
    echo 'Sorry, you are not old enough to vote';
};
*/

/*
$time = 15;
if ($time < 12) {
    echo 'Good Morning';
} elseif($time < 17) {
    echo 'Good Afternoon';
} else {
    echo 'Good Evening';
};
*/

/*
$posts = [];
if(!empty($posts)) {
    echo $posts[0];
} else {
    echo 'No posts';
}

// si no es una publicacion vacia entonces publicamos cero [0] : de lo contrario no publicar

/*
$firstPost = !empty($posts) ? $posts[0] : 'No Posts'; 
$firstPost = !empty($posts) ? $posts[0] : null;
$firstPost = $posts[0] ?? null;

echo $firstPost;
*/

// Switch

$color_php = 'black';

switch($color_php) {
    case 'red':
        echo 'your favorite color is red';
        break;
    case 'yellow':
        echo 'your favorite color is yellow';
        break;
    case 'green':
        echo 'your favorite color is green';
        break;
    case 'blue':
        echo 'your favorite color is blue';
        break;
    default:
    echo 'your favorite color is not red, yellow, green or blue';
};



?>









