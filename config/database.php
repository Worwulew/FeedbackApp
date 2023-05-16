<?php

define('DB_HOST', 'localhost');
define('DB_USER', 'Grigory');
define('DB_PASS', 'Your_db_password');
define('DB_NAME', 'Your_db_name');

// create connection
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME); // like we did when created user class and then new user1 obj, but here we created a new connection obj with db

// check connection
if($conn->connect_error){ // checks if there's some error with connection
    die('Connection failed ' . $conn->connect_error); // cuts everything off
}

// echo 'Connect!';

?>
