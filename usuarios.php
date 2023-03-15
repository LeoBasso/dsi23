<?php
    require('pdo.inc.php');

    //PREPARA CONSULTA
    $sql = $pdo->query('SELECT * from usuarios');
   
    //LISTAGEM UTILIZANDO FETCH
    while ($usuario = $sql->fetch(PDO::FETCH_ASSOC)){;
        echo "<p>{$usuario['username']}</p>";
    }

    //LISTAGEM UTILIZANDO FETCHALL
    // $tudo = $sql->fetchAll(PDO::FETCH_ASSOC);
    // foreach ($tudo as $usuario) {
    //     echo "<p>{$usuario['username']}</p>";
    // }

?>

<form action = "usuario_adicionar.php" method="post">
    <p><input type="text" name="username"></p>
    <p><input type="password" name="password"></p>
    <p><label>
        <input type="checkbox" name="admin">
    </label></p>
    <p><input type="submit" value="Gravar"></p>
</form>