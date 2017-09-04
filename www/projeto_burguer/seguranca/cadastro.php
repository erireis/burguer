<html>  
    <head>
        <title>Burguer Pará</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <style>
            body{ background-color: #f77272; }            
            .Formulario{ position: absolute; top: 60px; left: 700px; font-family: sans-seri; }
            
        </style>
        
    </head>
    <body>
        <form name="cadastro" action="inserirusuario.php" method="post" >
        
        <div class="Formulario">
            
            
            <h3 id="m1">Nome Completo <br> <input size="50" type="text" name="nome" required=""></h3>
            <h3 id="m2">CPF <br><input type="text" name="cpf" maxlength="11" required=""></h3>
            <h3 id="m3">Endereco <br><input size="50" type="text" name="endereco"></h3>
            <h3 id="m4">Numero <br><input type="text" name="numero"></h3>
            <h3 id="m5">Celular/Fixo <br><input type="tel" name="celular"></h3>
            <h3 id="m7">CEP <br><input type="text" name="cep" maxlength="9" OnKeyPress="formatar('##-######', this)"></h3>
            
            <h3 id="m8">Cidade <select name="cidade">
                                       <option value="Belem"> Belem </option>
                                       <option value="Ananindeua"> Ananindeua </option>
                                       
                </select></h3>
            
            <h3 id="m9">Bairro <select name="bairro">
                                       <option value="Batista Campos"> Batista Campos </option>
                                       <option value="Sao Bras"> Sao Bras </option>
                                       <option value="Pedreira"> Pedreira </option>
                                       <option value="Guama"> Guama </option>
                                       <option value="Pratinha"> Pratinha</option>
                                       <option value="Terra Firme"> Terra Firme</option>
                                       <option value="Umarizal"> Umarizal</option>
                                       <option value="Campina"> Campina</option>
                                       <option value="Nazaré"> Reduto</option>
                                       <option value="Cidade Velha"> Cidade Velha</option>
                                       <option value="Reduto"> Reduto</option>
                </select></h3>
                        
            <h3 id="m10">Login <br><input type="text" name="login" required=""></h3>
            <h3 id="m11">Senha <br><input type="password" name="senha" required=""></h3>
            
            <a href="../cardapio/primeiropasso.php"><input type="submit" name="enviar" value="enviar"></a>
            <input type="reset" value="apaga">
        </div>
    </form>
    </body>
</html>
