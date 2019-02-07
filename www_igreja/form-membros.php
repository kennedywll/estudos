<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cadastro de Membros</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <form name="cadastro" action="cadastro-membros.php" method="post">
        <p>Atenção, digite abaixo os dados dos membros:</p>
        <p><label for="idNome">Nome completo: </label>
        <input type="text" name="nome" id="idNome" placeholder="Ex.: Katia" required autofocus></p>
        <p><label>Data de Nascimento: </label>
        <input type="date" name="date-birth" id="idBirth">
        <p><label for="idCargo">Cargo: </label>
        <input type="text" name="cargo" id="idCargo" placeholder="Ex.: Porteiro" required></p>
        <p><label>Data de batismo: </label>
        <input type="date" name="batismo" id="idBatismo">
        <p><label>Pertence a qual departamento: </label>
            <select name="departamento">
                <option name="00"></option>
                <option name="01">Ministerial</option>
                <option name="02">Ministério de Louvor</option>
                <option name="03">Limpeza</option>
                <option name="04">Recepção</option>
                <option name="05">Secretaria</option>
                <option name="06">Portaria</option>
                <option name="07">Circulo de Oração</option>
                <option name="08">Ministério Jovem</option>
                <option name="09">Ministério Infantil</option>
                <option name="10">Sonoplastia</option>
                <option name="11">Outro</option>           
            </select>

            <p><label>Pertence a qual congregação: </label>
            <select name="congregacao">
                <option name="00"></option>
                <option name="01">Sede</option>
                <option name="02">Altoé</option>
                <option name="03">Padre Geane</option>
                <option name="04">Aeroporto 1</option>
                <option name="05">Aeroporto 2</option>
                <option name="06">Filomena</option>
                <option name="07">São Cristóvão</option>
                <option name="08">Km 41</option>
                <option name="09">Cór. do Augusto</option>
                <option name="10">Cór da Areia</option>
                <option name="11">Cór. Zumbi dos Palmares</option>           
            </select>
        <br/><br/>
        <p><input type="submit" value="Cadastrar Membro">
        <input type="reset" value="Limpar"></p>
    </form>

    
    ______________________________________________________________<br/><br/>
    <a href="select-membros.php"><button type="button" value="">VERIFICAR MEMBROS CADASTRADOS</button></a>
    
</body>
</html>