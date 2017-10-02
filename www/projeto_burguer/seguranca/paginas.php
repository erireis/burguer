<?php include_once("../seguranca/conexao.php");
$id_curso = $_GET['nome'];
$result_itens = "SELECT * FROM itens WHERE id='$nome'";
$resultado_itens = mysqli_query($conn, $result_itens);
$row_cursos = mysqli_fetch_assoc($resultado_itens);
?>