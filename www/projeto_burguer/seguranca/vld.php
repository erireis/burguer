<?PHP
include('conexao.php');

# Validar os dados do usuário

function anti_sql_injection($string)
	{
		include('conexao.php');
		$string = stripslashes($string);
		$string = strip_tags($string);
		$string = mysqli_real_escape_string($conn,$string);
		return @$string;
	}

$sql = mysqli_query($conn,"select * from usuarios where login='".anti_sql_injection($_POST['login'])."' and senha='".anti_sql_injection($_POST['senha'])."' limit 1") or die("Erro");
$linhas = mysqli_num_rows($sql);
if($linhas == '')
	{
		?>
        <div class="msg2 padding20">Usuário não encontrado ou usuário e senha inválidos.</div>
        <?PHP
	}
else
	{
		while($dados=mysqli_fetch_assoc($sql))
			{
				session_start();
				$_SESSION['login'] = $dados['login'];
				header("Location: usuario.php");
			}
	}
?>