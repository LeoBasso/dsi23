<?php
    $erro = $_GET['erro'] ?? false;

    switch ($erro){
        case 1:
            echo 'Usuário ou senha inválidos';
            break;
        case 2:
            echo 'Você não está autenticado';
            break;
        case 3:
            echo 'Você efetuou logout';
    }
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <div id="login">
        <form action="form_receber.php" method="post">

            <div>
                <input type="text" name="usuario" placeholder="Usuário">
            </div>

            <div>
                <input type="password" name="senha" placeholder="Senha">
            </div>


            <div>
                <input type="submit" value="login">
            </div>

        </form>

    </div>
</body>

</html>