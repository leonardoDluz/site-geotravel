<?php

require('../functions/session.php');

$voto = $_GET["voto"];
if(empty($voto)){
    Header("Location:./vote.php");
}

$votoAlto = strtoupper($voto);

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/main.css">
    <link rel="icon" href="../../imgs/logo.png">
    <title>GeoTravel : Thanks for Vote</title>
</head>
<body>
    <?php require('../components/header.php');?>
    <session class="voted-<?=$voto?>">
        <a href="../festival/index.php" class="votes-card">
            <img src="../../imgs/mercado.jpg" alt="parintins">
            <span>Parintins</span>
            <span>See More About Parintins</span>
        </a>
        <span>Thanks for your Vote on</span>
        <span><?=$votoAlto?></span>
        <img src="../../imgs/<?=$voto?>.png" alt="boi <?=$voto?>">
        <a href="./listVotes.php" class="votes-card">
            <img src="../../imgs/bumbodromo.jpg" alt="votação">
            <span>Voting</span>
            <span>See Wich Ox Is Winning</span>
        </a>
    </session>
    <?php require('../components/footer.php');?>
</body>
</html>