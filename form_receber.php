<?php
    // form_receber.php

    $senha_cripto = '$2y$10$9FzicONmDWwgpDpr357x9.ZUT2prUSN5eMF77olw/F7Ns0pAn4g.6';
    

    $usuario = $_POST['usuario'] ?? false;
    $senha = $_POST['senha'] ?? false;

    if ($usuario == "Leo" && password_verify($senha, $senha_cripto)) {
        session_start();
        $_SESSION['usuario'] = '$usuario';
        
        header('location:boasvindas.php');
        die;
    } else {
        header('location:form.php?erro=1');
        die;
    }