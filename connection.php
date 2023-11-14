<?php

$conexao = mysqli_connect("localhost", "root", "", "Geotravel");
if(!$conexao){
    die;
} return $conexao;

?>