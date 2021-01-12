<?php

    $pdo = new PDO('mysql:host=localhost;dbname=modulo_08','root','');

    $id = 4;

    $sql = $pdo->prepare("DELETE FROM `clientes` WHERE id=?");

    if($sql->execute(array($id))){
        echo 'Meu cliente foi deletado com sucesso!';
    }

?>  