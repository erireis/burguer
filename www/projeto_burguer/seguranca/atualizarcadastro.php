<!DOCTYPE html>
<?php
//include '../seguranca/sessao.php';
session_star();

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
                <a class="nav-link" href="../cardapio/primeiropasso.php">Pedidos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Historico</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="consulta.php">Cadastro</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="encerrar.php"> > Encerrar</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Page Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h1 class="mt-5">Atualize seu Cadastro</h1>
          <p class="lead">Para melhor atendimento, mantenha seus dados sempre atualizados.</p>
          <ul class="list-unstyled">
              <div>
                  <?php
                  require 'conexao.php';
            $sql = "SELECT nome, cpf, celular, endereco, numero, cep, cidade, bairro FROM usuarios limit 1";
            $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
            echo  '</br>';
        while($row = mysqli_fetch_assoc($result)) {
            echo "nome: " . $row["nome"];
            echo  '</br>';
            echo "cpf: " . $row["cpf"];
            echo  '</br>';
            echo "Telefone: " . $row["numero"];
            echo  '</br>';
            echo "endereco: " . $row["endereco"];
            echo  '</br>';
            echo "numero: " . $row["numero"];
            echo  '</br>';
            echo "cep: " . $row["cep"];
            echo  '</br>';
            echo "cidade" . $row["cidade"];
            echo  '</br>';
            echo "bairro: " . $row["bairro"];

        }
        echo '</br>';
    } else {
        echo "0 results";
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