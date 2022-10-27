<?php

include ('conexao.php');



if(isset($_POST['usuario']) || isset($_POST['senha'])){

	if(strlen($_POST['usuario']) == 0){
		echo "Preencha seu usuário";
	} else if(strlen($_POST['senha']) == 0){
		echo "Preencha oa sua senha";
	} else {
		
		/*Código do login*/

		//Limpando as variáveis
		$usuario = $mysqli -> real_escape_string($_POST['usuario']);
		$senha = $mysqli -> real_escape_string($_POST['senha']);
		
		//Verificando o login e a senha
		$sql_code = "SELECT * FROM tb_usuarios WHERE usuario = '$usuario' AND senha = '$senha'";
		
		//Error na verificação login e senha
		$sql_query = $mysqli -> query($sql_code) or die ("Falha na execução do código SQL: " . $mysql->error);
		
		//Contando os registros
		$quantidade = $sql_query -> num_rows;
		
		if($quantidade == 1){
			$usuario = $sql_query -> fetch_assoc();
			
			//Criar uma nova sessão
			if(!isset($_POST)){
			
				//Começa uma nova sessão
				session_start();
				
			}
			
			$_SESSION['id'] = $usuario['id'];
			$_SESSION['nome'] = $usuario['nome'];

      //Direcionado para a página
      header("Location: painel.php");
			
		} else {
			echo "Falha ao logar! Usuário ou Senha incorretos.";

      //Direcionado para a página
      header("Location: protect.php");
		}
		
	}

}


?>

<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Tela de Login</title>
      <!-- CSS-->
      <link rel="stylesheet" href="css/style.css">
      <!-- JS-->
      <script src="js/scripts.js" defer></script> 
      <!-- Font Awesome cdnjs-->
      <link 
      rel="stylesheet" 
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />    
  </head>
  <body id="login">
      <form id="container-login" action="" method="POST">
        <h1 class="login-title">Acesse sua Conta</h1>
        <input type="text" placeholder="Login" id="Input-login" name="usuario">
        <input type="password" placeholder="Senha" id="Input-senha" name="senha">
        <button type="submit" id="Input-submit">Entrar</button>
      </form>
  </body>
</html>