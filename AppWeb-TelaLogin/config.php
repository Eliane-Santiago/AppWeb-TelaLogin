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
			
			$_SESSION['id'] = $id;
			$_SESSION['nome'] = $nome;

			//echo("<pre>");
			//print_r($_SESSION['nome']);
			//echo("</pre>");



      //Direcionado para a página
      header("Location: painel.php");
			
		} else {
		
			//Direcionado para a página
			header("Location: protect.php");
		}
		
	}

}


?>