<?php
        include("logara.php");
        $email = isset($_POST['email'])?$_POST['email']:'';
        $senha = isset($_POST['pas'])?$_POST['pas']:'';

        if(isset($email) || isset($senha)){
            if(strlen($email) == 0){
                echo "<p class=\"saidaecho\"> Preencha seu e-mail/senha</p>";
            } else {
                //evitando golpe de hackers.
                $email = $mysqli->real_escape_string($email);
                $senha = $mysqli->real_escape_string($senha);

                //código sql para conetar-se a tabela do banco de dados
                /*
                    Oq significa o código abaixo: select = selecione, * = todos os campos, from = da tabela, "TABLE NAME", HERE = aonde os dados recebem os valores,
                */
                $sql_Code = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";

                //rodando a query, ou seja, colocando o códico acima para funcionar
                $sql_query = $mysqli->query($sql_Code) or die("Falha na execução do código SQL: " . $mysqli->error);

                //vamos ver quantas linhas a consultado de sqlcode retornou dentro de sql query
                $quantidade = $sql_query->num_rows;

                if($quantidade == 1){
                    //se houve apenas uma linha consultada, há apenas um usuário, logo iniciará a cessão
                    $user = $sql_query->fetch_assoc();//coloquei os dados da tabela dentro da varial user

                    if (!isset($_SESSION)){
                        session_start();
                    }
                    $_SESSION['user'] = $user['id_usuario'];
                    $_SESSION['email'] = $user['email'];

                    //com o usurario logado, redirecionar ele para a pagina de logado
                    if(stripos($email,"city") !== false){
                        header("location: adv.php");
                    }else{
                        header("location: user.php");
                    };
                }else{
                    //se não, a senha e email não corresponderam-se
                    echo "<p class=\"saidaecho\">Falha ao logar: e-mail/senha incorretos</p>";
                };
            };
        };
    ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DrºEder Prestes</title>
    
    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"/>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">

</head>
<body>
    <div>
        
        <div id="logo"></div>
        
        <h1>Sistema de Processos: 
            <br>
            <span>DrºEder Presti</span>
        </h1>
        
        <div id="container">
            <form action="" method="post" autocomplete="off">
                <span class="material-symbols-outlined">person</span>
                <label for="email"></label><input id="email" placeholder="E-MAIL" type="email" name="email">
                
                <br>

                <span class="material-symbols-outlined">vpn_key</span>
                <label for="senha"></label><input placeholder="SENHA" type="password" id="pas" name="pas">

                <a href="https://api.whatsapp.com/send?phone=19988705673&text=Ola,%20esqueci%20minha%20senha!%20Poderia%20ajudar?">
                    <p>
                        Esqueceu a senha??
                    </p>
                </a>

                <input type="submit" id="uiq" class="botoes" value="Entrar">
            </form>
        </div>
    </div>

    <br>

    <p id="teste"></p>
</body>
</html>