
<?php
    
    /*Páginas de acesso aos usuários cadastrados*/


    session_start();

    //iniciando a sessão
    if(!isset($_SESSION)){

        //session_start();
        
        //$_SESSION['nome'] = "Eliane";
        
        //echo $_SESSION['nome'];
    }

?>

<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel</title>

</head>
<body>



    <h1>Bem vindo(a) ao Painel, <?php echo $_SESSION["nome"];?> </h1>

    <p><a href="logout.php">Sair</a></p>

</body>

</html>