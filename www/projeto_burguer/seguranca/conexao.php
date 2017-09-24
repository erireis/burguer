<?php

$host     = 'localhost';
$user     = 'root';
$password = '';
$database = 'mydb';

$conn = mysqli_connect($host, $user, $password, $database) or die(mysqli_error($conn));
