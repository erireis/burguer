<?php

$host     = 'localhost';
$user     = 'root';
$password = '';
$database = 'mydb';

$conn = mysqli_connect($host, $user, $password, $database);

#@var $sql type 
if(!$conn){
    die("Falhou conexao: " .mysqli_connect_error());
}
echo "conexao feita como sucesso";
