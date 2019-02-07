<?php
    
    $host = "localhost";
    $user = "root";
    $pass = "supr@NV*!";
    $database = "igreja";    
    
    $conexao = mysqli_connect($host, $user, $pass, $database);

    if(!$conexao){
        die('ERRO!!! Sem conexão com a base de dados. Informe o CPD.'.mysqli_error($conexao));
    }
    mysqli_set_charset($conexao, 'utf8') or die (@mysqli_error($conexao));
    echo "Conexão realizada com sucesso.<br/><br/>";

?>