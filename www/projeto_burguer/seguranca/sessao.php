<head>
<?php  
/* esse bloco de código em php verifica se existe a sessão
 */
session_start();
if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true))
{
	unset($_SESSION['login']);
	unset($_SESSION['senha']);
	echo "<script>location.href='http://localhost/projeto_burguer/index.php';</script>";
	}
$logado = $_SESSION['login'];
?>

