<?php

include '../seguranca/sessao.php'; ?>

<!DOCTYPE html>
<html lang="pt">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Bare - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
 

    <!-- Custom styles for this template -->
    <style>
      body {
        padding-top: 54px;
      }
      @media (min-width: 992px) {
        body {
          padding-top: 56px;
        }
      }
      h2{
          color: #ffffff;
      }

    </style>

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Bem vindo</a>
        <h2> <?php echo "$logado" ?> </h2>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="usuario.php">Inicio
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../cardapio/pedido.php">Pedidos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../seguranca/historico.php">Historico</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="atualizarcadastro.php">Cadastro</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="encerrar.php"> Encerrar</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h1 class="mt-5">Historico</h1>
          <p class="lead">Veja como qual foi melhor hamburguer que voê montoou!!</p>
          <ul class="list-unstyled">
              <div>
                  <?php include_once './conexao.php';;?>
                  <?php  $busca = "SELECT * FROM pedidos"; ?>
                  <?php  $total_reg = "4"; ?>
                    <?php  $pagina=$_GET['historico'];
                                if (!$pagina) {
                                    $pc = "1";
                                       } else {
                                            $pc = $pagina; } ?>
                  <?php   
                  $inicio = $pc - 1;   
                  $inicio = $inicio * $total_reg;  
                  ?>
                  <?php
                  $limite = mysqli_query("$busca LIMIT $inicio,$total_reg");
                  $todos = mysqli_query("$busca");
                  $tr = mysqli_num_rows($todos); // verifica o número total de registros
                  $tp = $tr / $total_reg; // verifica o número total de páginas
 
  // vamos criar a visualização
                  while ($dados = mysqli_fetch_array($limite, $conn)) {
                  $nome = $dados["id"];
                  echo "Nº pedido: $nome<br>";
  }
 
  // agora vamos criar os botões "Anterior e próximo"
                $anterior = $pc -1;
                $proximo = $pc +1;
                if ($pc>1) {
                    echo " <a href='?pagina=$anterior'><- Anterior</a> ";
                    }
                    echo "|";
                    if ($pc<$tp) {
                        echo " <a href='?pagina=$proximo'>Próxima -></a>";
                        }
                        ?>
              </div>
            <li></li>
          </ul>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="../css/vendor/jquery/jquery.min.js"></script>
    <script src="../css/vendor/popper/popper.min.js"></script>
    <script src="../css/vendor/bootstrap/js/bootstrap.min.js"></script>

  </body>

</html>

