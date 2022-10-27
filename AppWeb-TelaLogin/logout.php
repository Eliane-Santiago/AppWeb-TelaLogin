<?php

    /*Deslogando o usuário*/

    if(!isset($_SESSION)){
        session_start();
    }

    //Destruindo a sessão
    session_destroy();

    //Direcionado para a página
    header("Location: index.php");


?>