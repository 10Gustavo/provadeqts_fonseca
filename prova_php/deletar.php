<?php
$id = $_GET['id'];
include ("conexao.php");
$sql = "DELETE FROM usuarios WHERE id = '$id' ";
mysqli_query($conexao, $sql);
$registro = mysqli_affected_rows($conexao);
if ($registro) {
    header("location: dashadmin.php");
} else {
    echo "Não foi deletado";
}

?>