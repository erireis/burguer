<!DOCTYPE html>
<?php
include '../seguranca/sessao.php';
?>
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
          <h1 class="mt-5">Bem vindo a sua pagina</h1>
          <p class="lead">Monte seu hamuburguer com diversas opções de ingredientes.</p>
          <ul class="list-unstyled">
              <div>
                  <li><a href="../cardapio/pedido.php"><img src="../imagens/botaopedido.png" </a></li>
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