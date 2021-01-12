<?php

    $pdo = new PDO('mysql:host=localhost;dbname=modulo_08','root','');

    $id = 4;

    $sql = $pdo->prepare("UPDATE `clientes` SET nome='Mario', sobrenome='Araujo' WHERE id=$id");

    if($sql->execute()){
        echo 'Executado com sucesso!';
    }

?>  