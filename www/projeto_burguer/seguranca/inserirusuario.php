<html>

<?php

 include './conexao.php';

        $login = $_POST['userlogin'];
        $senha = $_POST['usersenha'];
        $nome = $_POST['nomecompleto'];
        $cpf = $_POST['cpf'];
        $endereco = $_POST['endereco'];
        $numero = $_POST['usenumber'];
        @$celular = @$_POST['fone'];
        $cidade = $_POST['usercidade'];
        $bairro = $_POST['userbairro'];
        $cep = $_POST['usercep'];

       
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
        

               