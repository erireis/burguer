<?php
// session_start inicia a sessão
session_start();
// as variáveis login e senha recebem os dados digitados na página anterior
@$login = $_POST['login'];
@$senha = $_POST['senha'];
// conectar com o bando de dados.

$conn = mysql_connect("localhost", "root", "") or die ("Sem conexão com o servidor");
$select = mysql_select_db("mydb") or die("Sem acesso ao DB, Entre em contato com o Administrador, gilson_sales@bytecode.com.br");

// A variavel $result pega as varias $login e $senha, faz uma pesquisa na tabela de usuarios
/* @var $result type */
$result = mysql_query("SELECT * FROM `USUARIOS` WHERE `login` = '$login' AND `senha` = '$senha'");
/* Logo abaixo temos um bloco com if e else! */
if(mysql_num_rows ($result) > 0 )
{
$_SESSION['login'] = $login;
$_SESSION['senha'] = $senha;
//echo "<script>location.href='http://localhost/projeto_burguer/usuario.php';</script>";
header('location: usuario.php');
}
else{
	unset ($_SESSION['login']);
	unset ($_SESSION['senha']);
	header('location: http://localhost/projeto_burguer/index.php');
	
	}

?>


