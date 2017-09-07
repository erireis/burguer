<?php 
// session_start inicia a sessão
session_start();
// as variáveis login e senha recebem os dados digitados na página anterior
$login = $_POST['senhanome'];
$senha = $_POST['senhalogin'];
// as próximas 3 linhas são responsáveis em se conectar com o bando de dados.
require './conexao.php';

// A variavel $result pega as varias $login e $senha, faz uma pesquisa na tabela de usuarios
$result = mysql_query("SELECT * FROM `usuarios` WHERE `NOME` = '$login' AND `SENHA`= '$senha'");
/* Logo abaixo temos um bloco com if e else, verificando se a variável $result foi bem sucedida, ou seja se ela estiver encontrado algum registro idêntico o seu valor será igual a 1, se não, se não tiver registros seu valor será 0. Dependendo do resultado ele redirecionará para a pagina site.php ou retornara  para a pagina do formulário inicial para que se possa tentar novamente realizar o login */
if(mysql_num_rows ($result) > 0 )
{
$_SESSION['senhanome'] = $login;
$_SESSION['senhalogin'] = $senha;
header('location:primeiropasso.php');
}
else{
	unset ($_SESSION['senhanome']);
	unset ($_SESSION['loginnome']);
	header('location:indx.php');
	
	}

?>