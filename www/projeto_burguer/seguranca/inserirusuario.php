<html>
    <head>
        <style>
            #retorno{position: absolute; size: 90px; left: 600px; top: 500px}
        </style>  
    

    </head>
    
    <body>
        
<?php

 include './conexao.php';

        $login = $_POST['login'];
        $senha = $_POST['senha'];
        $nome = $_POST['nome'];
        $cpf = $_POST['cpf'];
        $endereco = $_POST['endereco'];
        $numero = $_POST['numero'];
        @$celular = @$_POST['tel'];
        $cidade = $_POST['cidade'];
        $bairro = $_POST['bairro'];
        $cep = $_POST['cep'];

       
        if (!$conn) {
            die("Connec>on failed: " . mysqli_connect_error());
                    }
            $sql = "INSERT INTO usuarios VALUES (null, '$login', '$senha', '$nome', '$cpf', '$endereco', '$numero', '$celular', null, '$cidade', '$bairro', '$cep', '')";
                    if (mysqli_query(@$conn, @$sql)) {
                echo "";
                    } else {
                    echo "" . $sql . "<br>" . mysqli_error($conn);
                           } mysqli_close($conn);
                                                      
?>
        <a id="retorno" href="login.php"><input type="button" name="Retorno"></a> 
    </body>
</html>
        

               