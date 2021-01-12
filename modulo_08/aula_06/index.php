<?php

    $pdo = new PDO('mysql:host=localhost;dbname=clientes','root','');

    #GROUP BY cargo mostra somente 1 item por cargo
    $sql = $pdo->prepare("SELECT * FROM `clientes` GROUP BY cargo");
    $sql->execute();
    $clientes = $sql->fetchAll();
    foreach ($clientes as $key => $value) {
        echo $value['nome'];
        echo '<hr>';
        
    }
?>