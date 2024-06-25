<?php
include("conexao.php");
$nome = $_POST['nome'];
$login = $_POST['login'];
$senha = $_POST['senha'];
$nivel_acesso = $_POST['nivel_acesso'];

$sql = "INSERT INTO usuarios(nome,login, senha, nivel_acesso) VALUES ('$nome', '$login', '$senha', '$nivel_acesso')";

mysqli_query($conexao, $sql);

$registro = mysqli_affected_rows($conexao);

if($registro){
    header("location: dashadmin.php");
}else{
    echo "erro";
}

?>