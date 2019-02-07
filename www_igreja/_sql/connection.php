<?php

    $host = "localhost";
    $user = "root";
    $pass = "supr@NV*!";
    $database = "igreja";
    
    $conn = mysqli_connect($host, $user, $pass, $database);
    $db = mysqli_select_db($conn, $database);

    if($conn){
        mysqli_set_charset($conn, 'utf8') or die (@mysqli_error($conn));
       echo ("CONEXÃO BEM SUCEDIDA."); 
    } else {
        die ("CONEXÃO NÃO ESTABLECIDA").mysqli_connect_error($conn);
    }

    
    echo "<br><br><a href='../index.php'>HOME</a>"
?>