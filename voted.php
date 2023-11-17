<?php

session_start();

$voto = $_GET["voto"];
if(empty($voto)){
    Header("Location:./vote.php");
}

if($voto == "caprichoso"){
    $color = "blue";
}elseif($voto == "garantido"){
    $color = "red";
}

require './header.php';

?>
    <div class="flex flex-col items-center text-center justify-center text-white py-8 mx-5 mt-16 p-6 gap-y-4 shadow-md rounded bg-<?=$color?>-500">
        <h2 class="text-xl font-semibold">Obrigado por votar no <?=$voto?></h2>
        <img class="h-60 rounded" src="./imgs/boi-<?=$voto?>.jpg" alt="votar boi <?=$voto?>">
        <a class="bg-<?=$color?>-700 p-2 font-medium shadow-md rounded" href="">Retornar a Página Inicial</a>
    </div>
</body>
</html>