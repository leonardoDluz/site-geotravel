<?php

$conexao = require('./connection.php');
session_start();

$voto = $_GET["voto"];


$comando = "INSERT INTO Votos ( voto) VALUES('$voto')";
$resultado = mysqli_query($conexao, $comando);
if(!$resultado){
    $_SESSION["mensagem"] = "Algo Deu Errado ao Votar, Tente Novamente Mais Tarde";
    Header("Location:./vote.php");
}else{
    $_SESSION["mensagem"] = "Obrigado Por Votar";
    Header("Location:./voted.php?voto=$voto");
}

?>
