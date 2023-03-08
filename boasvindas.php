<?php
    #boasvindas.php
    require('verifica_autenticacao.php');

    echo 'Seu login funcionou :-)';

    // $senha_cripto = password_hash(123,PASSWORD_BCRYPT, [
    //     'cost' => 10,
    // ]);
    // echo $senha_cripto;
    // die();

?>

<p>
    <a href="logout.php">Sair</a>
</p>