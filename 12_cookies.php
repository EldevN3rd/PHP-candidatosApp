<?php
// cookies en php son buenas para recordar datos como username o email, 


/* ------- Cookies -------- */
setcookie('name', 'Alan', time() + 86400 * 30);

if(isset($_COOKIE['name'])) {
    echo $_COOKIE['name'];
}

setcookie('name', '', time() - 86400);
?>
