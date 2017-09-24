<?php
include './conexao.php';

$consulta = "SELECT * FROM usuarios";
$consultar = $mysqli->query($consulta) or die($mysqli->error);
