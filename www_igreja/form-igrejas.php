<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cadastro de Igrejas</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <form name="cadastro" action="cadastro-igreja.php" method="post">
        <p>Atenção, digite abaixo os dados da igreja:</p>
        <p><label for="idNome">Nome da igreja/congregação: </label>
        <input type="text" name="nomeIg" id="idNome" placeholder="Ex.: Congregação Bairro Altoé" required autofocus></p>
        <p><label>Pastor/Dirigente Local: </label>
        <input type="text" name="pastor-local" id="idPastor">
            <fieldset name=address style="width: 400px"><legend>Endereço da Igreja</legend>
                <p><label for="idLog">Logradouro: </label>
                <input type="text" name="logradouro" id="idLog" style="width:300px" maxsize="30" placeholder="Rua das Flores, 123, Bairro das Flores" required></p>
                <p><label for="idCity">Cidade: </label>
                <input type="text" name="city" id="idCity" placeholder="Jundiaí" required></p>
                Estado: <select name="uf">
                            <option value="00"></option>
                            <option value="ES">Espírito Santo</option>
                            <option value="SP">São Paulo</option>
                            <option value="MG">Minas Gerais</option>
                            <option value="RJ">Rio de Janeiro</option>
                        </select>
            </fieldset>
        <p><label>Data de Inauguração: </label>
        <input type="date" name="data-inaugura" id="idInaugura">
        <br/><br/>
        <input type="submit" name="cadastrar-Ig" value="FINALIZAR CADASTRO">

    </form>
    
</body>
</html>