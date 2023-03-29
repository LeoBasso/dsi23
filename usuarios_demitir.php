<?php
#usuarios_demitir.php

require('twig.inc.php');
require('pdo.inc.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //se for POST, realiza a operação demitir
    $id = $_POST['id'] ?? false;
    if ($id) {
        $sql = $pdo->prepare('UPDATE usuarios SET 
        active = 0 WHERE id = ?');
        $sql->bindParam(1, $id, PDO::PARAM_INT);
        $sql->execute();
    }
    header('location:usuarios_novo.php?msg=1');
    die;
}

$id = $_GET['id'] ?? false;

//bloqueia acesso sem ID

if (!$id) {
    header('location:usuarios_novo.php');
    die;
}


echo $twig->render('usuarios_demitir.html', [
    'id' => $id,
]);
