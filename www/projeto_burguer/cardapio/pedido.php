<?php 
include_once("../seguranca/conexao.php");
//Verificar se estÃ¡ sendo passado na URL a pÃ¡gina atual, senao Ã© atribuido a pagina 
$pagina = (isset($_GET['pagina']))? $_GET['pagina'] : 1;

//Selecionar todos os cursos da tabela
$result_itens = "SELECT * FROM itens";
$resultado_itens = mysqli_query($conn, $result_itens);

//Contar o total de cursos
$total_itens = mysqli_num_rows($resultado_itens);

//Seta a quantidade de cursos por pagina
$quantidade_itens = 10;

//calcular o nÃºmero de pagina necessÃ¡rias para apresentar os cursos
$num_pagina = ceil($total_itens/$quantidade_itens);

//Calcular o inicio da visualizacao
$incio = ($quantidade_itens*$pagina)-$quantidade_itens;

//Selecionar os cursos a serem apresentado na pÃ¡gina
$result_itens = "SELECT * FROM itens limit $incio, $quantidade_itens";
$resultado_itens = mysqli_query($conn, $result_itens);
$total_itens = mysqli_num_rows($resultado_itens);
?>
<!DOCTYPE html>
<html lang="pt">

  <head>
<?php include '../seguranca/sessao.php'; ?>

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
          <?php while($rows_cursos = mysqli_fetch_assoc($resultado_itens)){ ?>
					<div class="col-sm-6 col-md-4">
						<div class="thumbnail">
							<img src="imagens/produto.jpg" alt="...">
							<div class="caption text-center">
                                                            <a href="pedido.php?id_curso=<?php echo $rows_cursos['id']; ?>"><h3><?php echo $rows_cursos['nome']; ?></h3></a>
								<p><a href="#" class="btn btn-primary" role="button">Comprar</a> </p>
							</div>
						</div>
					</div>
				<?php } ?>
            
          
    </div>
        <?php
				//Verificar a pagina anterior e posterior
				$pagina_anterior = $pagina - 1;
				$pagina_posterior = $pagina + 1;
			?>
        <nav class="text-center">
				<ul class="pagination">
					<li>
						<?php
						if($pagina_anterior != 0){ ?>
                                            <a href="pedido.php?pagina=<?php echo $pagina_anterior; ?>" aria-label="Previous">
								<span aria-hidden="true">&laquo;</span>
							</a>
						<?php }else{ ?>
							<span aria-hidden="true">&laquo;</span>
					<?php }  ?>
					</li>
					<?php 
					//Apresentar a paginacao
					for($i = 1; $i < $num_pagina + 1; $i++){ ?>
                                        <li><a href="pedido.php?pagina=<?php echo $i; ?>"><?php echo $i; ?></a></li>
					<?php } ?>
					<li>
						<?php
						if($pagina_posterior <= $num_pagina){ ?>
							<a href="pagina.php?pagina=<?php echo $pagina_posterior; ?>" aria-label="Previous">
								<span aria-hidden="true">&raquo;</span>
							</a>
						<?php }else{ ?>
							<span aria-hidden="true">&raquo;</span>
					<?php }  ?>
					</li>
				</ul>
			</nav>

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