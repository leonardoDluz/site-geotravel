<?php

$conexao = require('../functions/connection.php');

$comandoCaprichoso = "SELECT COUNT(*) AS votosCaprichoso FROM Votos WHERE voto = 'caprichoso'";
$comandoGarantido = "SELECT COUNT(*) AS votosGarantido FROM Votos WHERE voto = 'garantido'";

$resultadoCaprichoso = mysqli_query($conexao, $comandoCaprichoso);
$resultadoGarantido = mysqli_query($conexao, $comandoGarantido);

$registroCaprichoso = mysqli_fetch_assoc($resultadoCaprichoso);
$registroGarantido = mysqli_fetch_assoc($resultadoGarantido);

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/main.css">
    <link rel="icon" href="../../imgs/logo.png">
    <title>GeoTravel : List of Votes of Parintins Festival</title>
</head>
<body>
    <?php require('../components/header.php');?>
    <session class="list-votes">
        <div class="vote-caprichoso">
            <span>CAPRICHOSO</span>
            <span>Have <?=$registroCaprichoso["votosCaprichoso"]?> Votes</span>
            <img src="../../imgs/caprichoso.png" alt="boi caprichoso">
        </div>
        <div class="vote-garantido">
            <span>GARANTIDO</span>
            <span>Have <?=$registroGarantido["votosGarantido"]?> Votes</span>
            <img src="../../imgs/garantido.png" alt="boi garantido">
        </div>
    </session>
    <?php require('../components/footer.php');?>
</body>
</html>
