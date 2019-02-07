<?php

    //Conexão com DB
    include_once ("_sql/connection.php");

    //Criando table para exibição dos dados
    echo "<table border=1>";
        echo "<tr>";
            echo "<th>ID</th>";
            echo "<th>Nome</th>";
            echo "<th>Data de Nascimento</th>";
            echo "<th>Cargo</th>";
            echo "<th>Data de Batismo</th>";
            echo "<th>Departamento</th>";
            echo "<th>Congregação</th>";
            echo "</tr>";

    //Comando utilizado e busca no DB
    $sql = "SELECT * FROM tb_cadmem ORDER BY nome";
    $query = mysqli_query($conn, $sql) or die ("ERRO AO ACESSAR REGISTRO");

    //Obtendo das por meio do loop "while"
    while($registro = mysqli_fetch_array($query)){

        $id = $registro['id'];
        $nome = $registro['nome'];
        $birth = $registro['birth'];
        $cargo = $registro['cargo'];
        $batismo = $registro['data_batismo'];
        $dep = $registro['departamento'];
        $cong = $registro['congregacao'];

        //Criando as linhas na table
        echo "<tr>";
            echo "<td>".$id."</td>";
            echo "<td>".$nome."</td>";
            echo "<td>".$birth."</td>";
            echo "<td>".$cargo."</td>";
            echo "<td>".$batismo."</td>";
            echo "<td>".$dep."</td>";
            echo "<td>".$cong."</td>";
        echo "</tr>";
    }

    mysqli_close($conn);
    echo "</table>";
?>