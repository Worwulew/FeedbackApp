<?php

define('DB_HOST', 'localhost');
define('DB_USER', 'Grigory');
define('DB_PASS', '12345');
define('DB_NAME', 'php_dev');

// create connection
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME); // like we did when created user class and then new user1 obj, but here we created a new connection obj with db

// check connection
if($conn->connect_error){ // checks if there's some error with connection
    die('Connection failed ' . $conn->connect_error); // cuts everything off
}

// echo 'Connect!';

?>