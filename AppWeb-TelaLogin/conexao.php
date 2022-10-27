<?php
    
     //Criado as variáveis do banco
     $usuario = 'root';
     $senha = '';
     $database = 'bd_login';
     $host = 'localhost';
     
     //Criando o objeto de conexão BD
     $mysqli = new mysqli ($host, $usuario, $senha, $database);


     //Criando a tratativa de erro
     if($mysqli -> error){
     die("Falha ao conectar ao banco de dados: " . $mysqli -> error);
     }

?>