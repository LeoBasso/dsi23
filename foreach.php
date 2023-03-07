<?php
    // foreach
    // $var = [
    //     'Huguinho',
    //     'Zezinho',
    //     'Luizinho'
    // ];

    // foreach ($var as $valor) {
    //     echo "<p>{$valor}</p>";
    // }

    $pessoa = [
        'nome' => 'Fulano',
        'idade' => '85',
        'cidade' => 'Bento',
    ];

    // echo $pessoa['nome'];

    foreach ($pessoa as $indice => $valor) {
        echo "<p><b>{$indice}</b> $valor</p>";
    }