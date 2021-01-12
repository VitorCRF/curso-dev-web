<html lang="en">
<head>
</head>
<body>
    <?php
    /*
    //função isset verifica se o botão com nome de acao foi ativado
    if(isset($_GET['acao'])){
        //Metodo get sendo utilizado para coletar os dados dos inputs do formulário
        $nome = @$_GET['nome'];
        $email = @$_GET['email'];
        echo($nome);
        echo('<br/>');
        echo($email);
    }*/

    if(isset($_POST['acao'])){
        //Metodo POST (não aparece os dados na URL) sendo utilizado para coletar os dados dos inputs do formulário
        $nome = @$_POST['nome'];
        $email = @$_POST['email'];
        echo($nome);
        echo('<br/>');
        echo($email);
    }

    ?>
    <form method="POST">
    <input type="text" name="nome">
    <input type="text" name="email">
    <input type="submit" name="acao" value="Enviar">
    </form>
</body>
</html>

