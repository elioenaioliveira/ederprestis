<?php
    //iniciando a cessão de acordo com o dado enviando pelo index
    if (!isset($_SESSION)){
        session_start();
    }
    if(!isset($_SESSION['email'])){
        die("Você Não pode acessar essa página, porque não esta logado <p> <a href=\"index.php\">Ir para login</a></p>");
    }
?>