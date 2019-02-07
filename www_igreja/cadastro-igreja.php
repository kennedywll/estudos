<?php 
    //include_once ("conexao.php");
    include_once ("_sql/connection.php");

    $igreja = $_POST['nomeIg'];
    $pastor = $_POST['pastor-local'];
    $logradouro = $_POST['logradouro'];
    $city = $_POST['city'];
    $uf = $_POST['uf'];
    $dataInaugura = $_POST['data-inaugura'];

    
    $sql = "INSERT INTO tb_cadigr VALUES (default, '$igreja', '$pastor', '$logradouro', '$city', '$uf', '$dataInaugura')";

    $query = mysqli_query($conexao, $sql);

    if($query){
        echo "IGREJA CADASTRADA COM SUCESSO.";
    } else {
        echo "ERRO AO TENTAR CADASTRAR.<br>".mysqli_error($conexao);
    }

    mysqli_close($conexao);
?>