<?php
    include('protect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h6>Security Área</h6>
    <header>
        <h1>Bem vindo, <?php echo $_SESSION['email']; ?></h1>
    </header>
    <hr>
    <div id="container2">
        <h2>Área de Comandos</h2>
        <div onclick="cd()" class="subC"><h5 class="h5doSubC">Cadastrar Cliente</h5></div>
        <div onclick="ap()" class="subC"><h5 class="h5doSubC">Atualizar um Processo</h5></div>
        <div class="subC"><h5 class="h5doSubC">Excluir um processo</h5></div>
        <div class="subC"><h5 class="h5doSubC">Configurações</h5></div>
    </div>
    <div id="sCommand"></div>
    <p>
        <a href="logout.php" ><input type="button" value="Sair"></a>
    </p>

    <script>
        var saida = document.getElementById("sCommand");
        function cd(){
            var formulario = document.createElement("form");
            var inpute = document.createElement("input");
            var pdesaida = document.createElement("p");
            
            var h1t = document.createElement("h1");
            var h6t = document.createElement("h6");

            h1t.textContent = 'Cadastro de Cliente'
            h6t.textContent = 'Esse processo demora cerca de 24h!'
            pdesaida.textContent = 'Nome:';
            
            formulario.setAttribute('id','formdecadastro')
            pdesaida.setAttribute('id','psaida1');
            inpute.setAttribute('id','nome');

            saida.appendChild(formulario);
            formulario.appendChild(h1t);
            formulario.appendChild(h6t);
            formulario.appendChild(pdesaida);
            formulario.appendChild(inpute);
        }
        function ap(){
            var formulario = document.createElement("form");
            var inpute = document.createElement("input");
            var inpute2 = document.createElement("textarea");
            var pdesaida = document.createElement("p");
            var pdesaida2 = document.createElement("p");
            var h1t = document.createElement("h1");
            var h6t = document.createElement("h6");
            var enviar = document.createElement("input")
            enviar.setAttribute('type','submit')
            enviar.setAttribute('value','Enviar')
            h1t.textContent = 'Atualizar processo'
            h6t.textContent = 'Este processo pode demorar 24h'
            pdesaida2.textContent = 'Descreva:';
            inpute2.setAttribute('id','tarea')
            saida.appendChild(formulario);
            pdesaida.textContent = 'N° do processo:';
            formulario.setAttribute('id','formdecadastro')
            pdesaida.setAttribute('id','psaida1');
            inpute.setAttribute('id','nome');
            formulario.appendChild(h1t);
            formulario.appendChild(h6t);
            formulario.appendChild(pdesaida);
            formulario.appendChild(inpute);
            formulario.appendChild(pdesaida2)
            formulario.appendChild(inpute2);
            formulario.appendChild(enviar);
        }
    </script>

</body>
</html>