<?php

$url = "localhost";
$usuario = "root";
$senha ="";
$dbname= "proovaa";
$porta = "3306";

$conexao = mysqli_connect($url, $usuario, $senha, $dbname, $porta);

if($conexao){
    echo "Conexão ok";
}else{
    echo "Não houve conexão";
}