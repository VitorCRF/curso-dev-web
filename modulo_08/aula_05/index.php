<?php

    $pdo = new PDO('mysql:host=localhost;dbname=modulo_08','root','');
    /*
    $sql = $pdo->prepare("SELECT * FROM categorias");

    $sql->execute();

    $info = $sql->fetchAll();
    
    foreach ($info as $key => $value) {
        $categoria_id = $value['id'];
        echo 'Categoria: '.$value['nome'];
        echo '<br />';
        $sql = $pdo->prepare("SELECT * FROM posts WHERE categoria_id = $categoria_id");
        $sql->execute();
        $infoPosts = $sql->fetchAll();
        foreach ($infoPosts as $key => $value) {
            echo 'Titulo: '.$value['titulo'];
            echo '<br />';
            echo 'Noticia: '.$value['conteudo'];
            echo '<hr>';
        }
    }
    */

    $sql = $pdo->prepare("SELECT * FROM `posts` INNER JOIN `categorias` ON `posts`.`categoria_id` = 
    `categorias`.`id`");

    $sql->execute();
    $info = $sql->fetchAll();

    echo '<pre>';
    print_r($info);
    echo '</pre>';


?>