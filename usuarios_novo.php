<?php
    #usuarios_novo.php
    require('twig.inc.php');
    require('pdo.inc.php');

    $sql = $pdo->query('SELECT * FROM usuarios WHERE ACTIVE = 1');
    $usuarios = $sql->fetchAll(PDO::FETCH_ASSOC);

    echo $twig->render('usuarios.html', ['usuarios' => $usuarios,]);