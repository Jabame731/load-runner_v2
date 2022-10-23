<?php

$localhost = "localhost";
$root = "root";
$password = "";

$db_name = "flights";

$conn = mysqli_connect($localhost, $root, $password, $db_name);


if (!$conn) {
    echo "connection failed!";
}


?>