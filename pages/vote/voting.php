<?php

$conexao = require('../functions/connection.php');
require('../functions/session.php');

if(isset($_SESSION["voted"])){
    $_SESSION["mensagem"] = "Seu Voto Já Foi Contabilizado";
    Header("Location:./vote.php");
}
$voto = $_GET["voto"];

$comando = "INSERT INTO Votos (voto) VALUES('$voto')";
$resultado = mysqli_query($conexao, $comando);
if(!$resultado){
    $_SESSION["mensagem"] = "Algo Deu Errado ao Votar, Tente Novamente Mais Tarde";
    Header("Location:./vote.php");
}else{
    $_SESSION["mensagem"] = "Obrigado Por Votar";
    $_SESSION["voted"] = TRUE;
    $_SESSION["voto"] = $voto;
    Header("Location:./voted.php?voto=$voto");
}

?>
