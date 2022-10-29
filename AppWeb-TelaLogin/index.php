<?php

    include ('config.php');

    
    /*Páginas de acesso aos usuários cadastrados*/

    //iniciando a sessão
    if(!isset($_SESSION)){

        session_start();

        //echo("<pre>");
        //print_r($_SESSION['nome']);
        //echo("</pre>");
    
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