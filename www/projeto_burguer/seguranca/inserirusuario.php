<?php

require './conexao.php';

$login = $_post['login'];
$senha = $_post['senha'];
$nome = $_post['nome'];
$cpf = $_post['cpf'];
$endereco = $_post['endereco'];
$numero = $_post['numero'];
$celular = $_post['tel'];
$cidade = $_post['cidade'];
$bairro = $_post['bairro'];
$cep = $_post['cep'];

$sql = "INSERT INTO usuarios VALUES ('$login', '$senha', '$nome', '$cpf', '$endereco', '$numero', '$celular', $cidade', '$bairro', '$cep', '$tipo' )";

/* @var $sql type */
if(mysqli_query($conn, $sql)){
         echo 'Novos dados criado com sucesso';
     }else{
         echo "Error: " .$sql. "<br>" .mysqli_error($conn);
     }mysqli_close($conn);
