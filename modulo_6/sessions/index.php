<?php
    /*
    session_start();
    $_SESSION['nome'] = 'Vitor';
    echo($_SESSION['nome']);
    */
    
    //Cookies
    setcookie('nome', 'Vitor', time()-(60*60*24),'/');

    echo $_COOKIE['nome'];
?>