<?php
    $host = "localhost";
    $bancoDeDados = "ederplogin";
    $usuario = "root";
    $senha = "";

    //essa parte esta conectando-se o BD
    $mysqli = new mysqli($host, $usuario, $senha, $bancoDeDados);

    //se houver algum erro, matar a conexão
    if($mysqli->error){
        die("Falha ao conectar ao banco de dados: " . $mysqli->error);
    };

?>