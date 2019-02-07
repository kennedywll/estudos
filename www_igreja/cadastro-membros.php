<?php

include_once "conexao.php";

/* $conexao = new mysqli('localhost:3306', 'root', 'supr@NV*!', 'igreja');

    if(!$conexao){
        die('ERRO!!! Sem conexão com a base de dados. Informe o CPD.');
    } */
    //echo "Conexão com base de dados efetuada com sucesso.";


$nomeMem = $_POST['nome'];
$birth = $_POST['date-birth'];
$cargo = $_POST['cargo'];
$batismo = $_POST['batismo'];
$dept = $_POST['departamento'];
$cong = $_POST['congregacao'];

/* $nomeMem = "Josefino Silva";
$birth = "2019-10-20";
$cargo = "Porteiro";
$batismo = "2019-1-20";
$dept = "Ministerial";
$cong = "Sede"; */

$sql = "INSERT INTO tb_cadmem /* (id, nome, birth, cargo, data_batismo, departamento, congregacao) */
VALUES (default, '$nomeMem', '$birth', '$cargo', '$batismo', '$dept', '$cong');";

if(mysqli_query($conexao,$sql)){
    echo "Parabéns! <br> Informações gravadas com sucesso.";
    
} else{
    echo "Erro ao tentar cadastrar informações.".mysqli_error($conexao);
    
}

mysqli_close($conexao);
?>
<

