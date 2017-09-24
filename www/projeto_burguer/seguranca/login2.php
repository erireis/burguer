<!DOCTYPE html>

<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
         
    <head>
        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title>Casa do Hambuguer</title>
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
		<link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
                <link href="../css/logincss.css" rel="stylesheet">
    </head>
    <body>
        <div class="container">
           
            <header>
                <h1>Bem vindo</h1>
				
            </header>
            <section>				
                <div id="container_demo" >
                    <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
                            <form class="login button" action="vld.php" method="post"> 
                                <h1>Acessar</h1> 
                                <p> 
                                    <label for="username" class="uname" > Login </label>
                                    <input id="username" name="login" required="required" type="text" placeholder="Nome login"/>
                                </p>
                                <p> 
                                    <label for="password" class="youpasswd"> Senha </label>
                                    <input id="password" name="senha" required="required" type="password" placeholder="Sua senha" /> 
                                </p>
                                <p class="keeplogin"> 
                                                                            
								</p>
                                <p class="login button">
                                    <input type="submit"  value="Logar">
                                    
								</p>
                                <p class="change_link">
									Ainda não se cadastrou ?
                                                                        <a href="#toregister" class="to_register">Me cadastrar</a>
								</p>
 
                                </form>
                            </div>

                        <div id="register" class="animate form">
                            <form name="cadastro" method="POST" action="inserirusuario.php" autocomplete="on"> 
                                <h1> Efetue Cadastro </h1> 
                                <p> 
                                    <label for="username" class="username" >Seu nome</label>
                                    <input id="username" name="nomecompleto" required="required" type="text" placeholder="Nome completo" />
                                </p>  
                                <p> 
                                    <label for="usercpf" class="cpf" >CPF</label>
                                    <input id="usercpf" name="cpf" required="required" type="text" placeholder="000.000.000-00" />
                                </p>   
                                <p> 
                                    <label for="userfone" class="endereco" >Telefone / Celular</label>
                                    <input id="userfone" name="fone" required="required" type="text" placeholder="00 000000000" />
                                </p>
                                <p> 
                                    <label for="usernameendereco" class="endereco" >Endereço</label>
                                    <input id="userendereco" name="endereco" required="required" type="text" placeholder="Travessa alguma coisa" />
                                </p>
                                <p> 
                                    <label for="usernumber" class="usernumber" >Numero</label>
                                    <input id="usernumber" name="usernumber" required="required" type="text" placeholder="Ex: 527-A" />
                                </p> 
                                <p> 
                                    <label for="usercep" class="cep" >CEP</label>
                                    <input id="usercep" name="usercep" required="required" type="text" placeholder="Ex.: 00.000-000" />
                                </p>
                                <p> 
                                    <label for="usercidade" class="cidade" >Cidade</label>
                                    <input id="usercidade" name="usercidade" required="required" type="text" placeholder="Ex.: Belem" />
                                </p> 
                                <p> 
                                    <label for="userbairro" class="youmail"  > Bairro</label>
                                    <input id="userbairro" name="userbairro" required="required" type="text" placeholder="Ex.: Batista Campos"/> 
                                </p>
                                <p> 
                                    <label for="userlogin" class="youpasswd" >Criar Login </label>
                                    <input id="userlogin" name="userlogin" required="required" type="password" placeholder="Ex.: Thiago#43"/>
                                </p>
                                <p> 
                                    <label for="usersenha" class="usersenha" >Criar Senha </label>
                                    <input id="usersenha" name="usersenha" required="required" type="password" placeholder="Ex.: X8df!90EO"/>
                                </p>
                                <p class="signin button"> 
									<input type="submit" value="Enviar"/> 
								</p>
                                <p class="change_link">  
									Já possui cadastro ?
									<a href="#tologin" class="to_register"> Iniciar Login </a>
								</p>
                            </form>
                        </div>
						
                    </div>
                </div>  
            </section>
        </div>
    </body>
</html>
