<?php

$conexao = require('./connection.php');

$comandoCaprichoso = "SELECT COUNT(*) AS votosCaprichoso FROM Votos WHERE voto = 'caprichoso'";
$comandoGarantido = "SELECT COUNT(*) AS votosGarantido FROM Votos WHERE voto = 'garantido'";

$resultadoCaprichoso = mysqli_query($conexao, $comandoCaprichoso);
$resultadoGarantido = mysqli_query($conexao, $comandoGarantido);

$registroCaprichoso = mysqli_fetch_assoc($resultadoCaprichoso);
$registroGarantido = mysqli_fetch_assoc($resultadoGarantido);

require './header.php';

?>
    <session class="flex flex-col py-10 px-5 gap-y-10">
        <span class="flex items-center text-center justify-center h-56 text-white text-2xl font-bold rounded shadow-md bg-blue-500"
        >Votes boi Caprichoso: <?=$registroCaprichoso["votosCaprichoso"]?></span>
   
        <span class="flex items-center text-center justify-center h-56 text-white text-2xl font-bold rounded shadow-md bg-red-500"
        >Votes boi Garantido: <?=$registroGarantido["votosGarantido"]?></span>
    </session>
</body>
</html>