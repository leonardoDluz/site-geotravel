<?php

$conexao = require('./connection.php');

$comandoCaprichoso = "SELECT COUNT(*) AS votosCaprichoso FROM Votos WHERE voto = 'caprichoso'";
$comandoGarantido = "SELECT COUNT(*) AS votosGarantido FROM Votos WHERE voto = 'garantido'";

$resultadoCaprichoso = mysqli_query($conexao, $comandoCaprichoso);
$resultadoGarantido = mysqli_query($conexao, $comandoGarantido);

$registroCaprichoso = mysqli_fetch_assoc($resultadoCaprichoso);
$registroGarantido = mysqli_fetch_assoc($resultadoGarantido);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <session>
        <div>
            <span>O boi Caprichoso tem <?=$registroCaprichoso["votosCaprichoso"]?></span>
        </div>
        <div>
            <span>O boi Garantido tem <?=$registroGarantido["votosGarantido"]?></span>
        </div>
    </session>
</body>
</html>