<?php
    // form_receber.php
    require('pdo.inc.php');

    $usuario = $_POST['usuario'] ?? false;
    $senha = $_POST['senha'] ?? false;


    //PREPARA CONSULTA
    $sql = $pdo->prepare('SELECT * from usuarios WHERE username = ?');

    //ANEXA A VARIÁVEL $USUARIO NO PARÃMETRO 1
    $sql->bindParam(1, $usuario, PDO::PARAM_STR);

    //RODA CONSULTA NO BANCO
    $sql->execute();

    //BUSCA OS DADOS NO BANCO
    $dados = $sql->fetch(PDO::FETCH_ASSOC);

    if ($sql->rowCount() == 1
    && password_verify($senha, $dados['password'])) {
        //autenticação OK
        session_start();
        $_SESSION['usuario'] = $usuario;
        $_SESSION['admin'] = $dados['admin'];
        
        header('location:boasvindas.php');
        die;
    } else {
        header('location:form.php?erro=1');
        die;
    }