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
    .checkin1{position: absolute; left: 450px; top: 210px;}
    .checkin2{position: absolute; left: 950px; top: 210px;}
    

    </style>

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Bem vindo</a>
        <?php echo "$logado" ?>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="../seguranca/usuario.php">Inicio
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="primeiropasso.php">Pedidos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Historico</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Cadastro</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">
      <div class="row">
            <?php
            $sql = mysqli_query("SELECT * FROM itens", $conn);
            while($res = mysqli_fetch_array($sql)){
            ?>
          <li>
              <span><?php echo $res ['nome'] ?></span>
              <strong><?php echo $res ['valor_unit'] ?></strong>
          </li>
          <?php
            }
          ?>
          </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="../css/vendor/jquery/jquery.min.js"></script>
    <script src="../css/vendor/popper/popper.min.js"></script>
    <script src="../css/vendor/bootstrap/js/bootstrap.min.js"></script>

  </body>

</html>
          <!--
        <div class="checkin1">
    
            
            <h3 id="p1"> Tradicional <input type="checkbox" name="tradicional" value="Tradicional"></h3>
            <h3 id="p2"> Pao Batata  <input type="checkbox" name="batata" value="Batata"></h3>
            <h3 id="p3"> Pao Vermelho <input type="checkbox" name="vermelho" value="Vermelha"></h3>
            <h3 id="p4"> Pao Verde <input type="checkbox" name="verde" value="Verde"></h3>
            <h3 id="p5"> Pao de Abobora <input type="checkbox" name="abobora" value="Abobora"></h3>
            <h3 id="p6"> Pao de Brioche <input type="checkbox" name="brioche" value="Brioche"></h3>
            </div>
            <div class="checkin2">
            <h3 id="p7"> Pao Prete <input type="checkbox" name="prete" value="Prete"></h3>
            <h3 id="p8"> Farelo de Trigo <input type="checkbox" name="trigo" value="Farelo"></h3>
            <h3 id="p9"> Pao de Cerveja <input type="checkbox" name="cerveja" value="Cerveja"></h3>
            <h3 id="p10"> Pao Australiano <input type="checkbox" name="australiano" value="Australiano"></h3>
            <h3 id="p11"> Pao integral <input type="checkbox" name="integral" value="Integral"></h3>
            <h3 id="p12"> Pao de Gegilim <input type="checkbox" name="gegilim" value="Pao Gegilim"></h3>
            </div>
      
          -->