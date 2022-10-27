<?php

    /*Bloqueando acesso indevido as páginas sem está logado ou usuários não cadastrados*/

    //iniciando a sessão
    if(!isset($_SESSION)){

        session_start();
        

    }

    //Criando a sessão ID
    if(!isset($_SESSION['id'])){
        die("Você não pode acessar essa página porque não está logado ou não possui cadastro.<p><a href=\"index.php\">Entrar</a></p>");
    }

   

?>