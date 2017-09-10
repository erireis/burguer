<?php
// session_start inicia a sessão
session_start();
// as variáveis login e senha recebem os dados digitados na página anterior
@$login = $_POST['userlogin'];
@$senha = $_POST['usersenha'];
// conectar com o bando de dados.
include_once './conexao.php';
// A variavel $result pega as varias $login e $senha, faz uma pesquisa na tabela de usuarios
/* @var $result type */
$result = mysql_query("SELECT * FROM `USUARIOS` WHERE `login` = '$login' AND `senha` = '$senha'");
/* Logo abaixo temos um bloco com if e else, verificando se a variável $result foi bem sucedida, ou seja se ela estiver encontrado algum registro idêntico o seu valor será igual a 1, se não, se não tiver registros seu valor será 0. Dependendo do resultado ele redirecionará para a pagina site.php ou retornara  para a pagina do formulário inicial para que se possa tentar novamente realizar o login */
if(mysql_num_rows ($result) > 0 )
{
$_SESSION['userlogin'] = $login;
$_SESSION['usersenha'] = $senha;
echo "<script>location.href='http://localhost/projeto_burguer/usuario.php';</script>";
//header('location: http://localhost/testdev/ope.php');
}
else{
	unset ($_SESSION['userlogin']);
	unset ($_SESSION['usersenha']);
	header('location: http://localhost/projeto_burguer/index.php');
	
	}

?>


