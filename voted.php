<?php

session_start();

$voto = $_GET["voto"];
if(empty($voto)){
    Header("Location:./vote.php");
}

if($voto == "caprichoso"){
    $color = "red";
}elseif($voto == "garantido"){
    $color = "blue";
}

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
    <div class="<?=$color?>">
        <span>Obrigado por votar no <?=$voto?></span>
        <a href="">Retornar a Página Inicial</a>
    </div>
</body>
</html>