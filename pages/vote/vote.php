<?php

require('../functions/session.php');
require('../functions/message.php');

if(isset($_SESSION["voted"])){
    Header("Location:./voted.php?voto=".$_SESSION["voto"]);
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/main.css">
    <link rel="icon" href="../../imgs/logo.png">
    <title>GeoTravel : Vote for Parintins Festival</title>
</head>
<body>
    <?php require('../components/header.php');?>
    <session class="vote">
        <a class="vote-caprichoso" href="./voting.php?voto=caprichoso">
            <span>CAPRICHOSO</span>
            <img src="../../imgs/caprichoso.png" alt="boi caprichoso">
        </a>
        <a class="vote-garantido" href="./voting.php?voto=garantido">
            <span>GARANTIDO</span>
            <img src="../../imgs/garantido.png" alt="boi garantido">
        </a>
    </session>
    <?php require('../components/footer.php');?>
    <script src="../../js/index.js"></script>
</body>
</html>