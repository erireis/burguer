<html>
    <head>
        <title>1º Etapa de 10</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <?php  
/* esse bloco de código em php verifica se existe a sessão, 
 * pois o usuário pode simplesmente não fazer o login e 
 * digitar na barra de endereço do seu navegador o caminho para a página principal do site (sistema), 
 * burlando assim a obrigação de fazer um login, com isso se ele não estiver feito o login não será criado a session, 
 * então ao verificar que a session não existe a página redireciona o mesmo para a index.php.
*/
session_start();
 
if((!isset ($_SESSION['senhanome']) == true) and (!isset ($_SESSION['senhalogin']) == true))
{
	unset($_SESSION['senhanome']);
	unset($_SESSION['senhalogin']);
	header('location:primeiropasso.php');
	}

$logado = $_SESSION['senhanome'];
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        
        <style>
            
            body{
                background-image: url(../imagens/Food/FUNDOPEDIDO.png);
            }
            
            .checkin{
            
                font-family: cursive;
                font-size: 25px;
                
            }
            
            .checkin1{
                                
                position: absolute;
                top: 100px;
                left: 500px;
            }
            
            .ckeckin2{
                
                position: absolute;
                top: 100px;
                left: 1000px;
                
            }
            
            .Butaop1{
                position: absolute;
                top: 550px;
                left: 800px;
            }
            
        </style>
    
    </head>
    <body>
        
        <table width="800" height="748" border="1"/>
  <tr>
      <td height="90" colspan="2" bgcolor="#CCCCCC">SISTEM WEB TESTE 
    <?php 
	echo" Bem vindo $logado";
	?>
    </td>
  </tr>
  <tr>
    <td width="103" height="410" bgcolor="#CCCCCC">MENU AQUI</td>
    <td width="546">CONTEUDO E ICONES AQUI</td>
  </tr>
  <tr>
    <td colspan="2" bgcolor="#000000"> </td>
  </tr>
</table>
        
        <div class="checkin">
            <div class="checkin1">
            <h3 id="p1"> Tradiconal <input type="checkbox" name="Pao" value="Tradicional"></h3>
            <h3 id="p2"> Pao Batata<input type="checkbox" name="Pao" value="Batata"></h3>
            <h3 id="p3"> Pao Vermelho <input type="checkbox" name="Pao" value="Vermelha"></h3>
            <h3 id="p4"> Pao Verde <input type="checkbox" name="Pao" value="Verde"></h3>
            <h3 id="p5"> Pao de Abobora <input type="checkbox" name="Pao" value="Abobora"></h3>
            <h3 id="p6"> Pao de Brioche <input type="checkbox" name="Pao" value="Brioche"></h3>
            </div>
            <div class="ckeckin2">
            <h3 id="p7"> Pao Prete <input type="checkbox" name="Pao" value="Prete"></h3>
            <h3 id="p8"> Farelo de Trigo <input type="checkbox" name="Pao" value="Farelo"></h3>
            <h3 id="p9"> Pao de Cerveja <input type="checkbox" name="Pao" value="Cerveja"></h3>
            <h3 id="p10"> Pao Australiano <input type="checkbox" name="Pao" value="Australiano"></h3>
            <h3 id="p11"> Pao integral <input type="checkbox" name="Pao" value="Integral"></h3>
            <h3 id="p12"> Tradiconal <input type="checkbox" name="Pao" value="Tradicional"></h3>
            </div>
        </div>
        
        <a href="segundopasso.html"><input class="Butaop1" type="submit"></a>
        
    </body>
</html>

<?php