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

require './header.php';

?>
    <div class="flex flex-col items-center text-center justify-center text-white h-48 mx-5 mt-16 p-6 gap-y-4 shadow-md rounded bg-<?=$color?>-500">
        <h2 class="text-xl font-semibold">Obrigado por votar no <?=$voto?></h2>
        <a class="bg-<?=$color?>-700 p-2 font-medium shadow-md rounded" href="">Retornar a Página Inicial</a>
    </div>
</body>
</html>