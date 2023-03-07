<?php
    // form_receber.php
    $usuario = $_POST['usuario'] ?? false;
    $senha = $_POST['senha'] ?? false;

    if ($usuario == "Leo" and $senha == "123") {
        session_start();
        $_SESSION['usuario'] = 'Leo';
        
        header('location:boasvindas.php');
        die;
    } else {
        header('location:form.php?erro=1');
        die;
    }