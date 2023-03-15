<?php
    require('pdo.inc.php');

    $name = $_POST['username'] ?? false;
    $password = $_POST['password'] ?? false;
    $admin = isset($_POST['admin']);

    $inserir = $pdo->prepare('INSERT INTO usuarios (username, password, active, admin)
    VALUES (:name, :password, "1", :admin)');
    
    $inserir->bindParam(':name', $name, PDO::PARAM_STR);
    $inserir->bindParam(':password', $password, PDO::PARAM_STR);
    $inserir->bindParam(':admin', $admin, PDO::PARAM_STR);

    if($inserir->execute()){
        echo"Sucesso";
    }else{
        echo"Falha";
    }   
?>