<?php
    include('protect.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Seja bem vindo ao sistema, <?php echo $_SESSION['email']; ?> </h1>

    <div>
        <h1>Serviços</h1>
        <a href="logout.php" ><input type="button" value="sair"></a>
    </div>
</body>
</html>