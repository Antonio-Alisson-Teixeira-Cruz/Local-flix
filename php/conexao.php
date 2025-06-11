<?php
    //Armazenamento de dados do banco
    $server = "localhost";
    $user = "root";
    $password = "";
    $database = "local_flix";

    //Conexao com o banco de dados
    $conexao = new mysqli($server, $user, $password, $database);
?>