<?php
    //Matriz

    //Criação da matriz e atribuição dos valores
    $arr = array(array('Vitor', 'Patricia'), array(21, 22));

    //For que imprime na tela todos os dados da matriz
    for($i=0; $i < count($arr); $i++){
        for($j=0; $j < count($arr[$i]); $j++){
            echo($arr[$i][$j]);
            echo '<hr>';
        }
    }


?>