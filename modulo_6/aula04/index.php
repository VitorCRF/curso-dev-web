<?php


    //Trabalhando com datas

    //Definindo fuso-horário brasileiro
    date_default_timezone_set('America/Sao_Paulo');

    //Armazenando na variável a data e hora através da função nativa date
    $data = date('d/m/y H:i:s');
    
    echo($data);

?>