<html>
    <head>
        <title>Bem vindo! Burguer Pará</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
        <style>
            body{background-color: #f3944f}
            #borda1{ border: 10px; }
            .acesso{ position: absolute; top: 200px; left: 600px;}
            .opcoes{ position: absolute; top: 275px; left: 675px;}
            #butao1{ position: absolute; top: 375px; left: 730px;}
                        
        </style>
    
    </head>
    <body>
        <form method="post" action="valida.php">
        <div id="borda1">
        <div class="acesso"> 
            <h3> Login <input type="text" class="Login" name="Login" id="nome" required=""></h3>
            <h3> Senha <input type="password" class="Senha" name="Senha" id="senha" required=""></h3>
            
        </div>
        
        <div class="opcoes">
            <h3><a href="../Recupecao/recuperacao.html">Esqueci senha </a></h3> 
            <h3><a href="../cadastro/cadastro.html">Novo usuario </a></h3> 
            
        </div>
        
            <input id="butao1" type="submit" value="acessar" />
        
        </div>
        </form>
    </body>
</html>

<?php





