<?php

    $nomes = array('Joao', 'Vitor', 'Pedro', 'Patricia', 'Arthur', 'Gabriel');


    foreach($nomes as $key => $value){
    
        echo $value;
        //separa com "fios de cabelo" cada linha
        echo '<hr>';
    }
    //Lenght de um array
    $total = count($nomes);
    echo $total;
?>