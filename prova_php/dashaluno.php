<?php
session_start();
include("seguranca.php");
include("conexao.php");
$sql = "SELECT * FROM usuarios";
$resultado = mysqli_query($conexao, $sql);


?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /* style.css */
body {
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
    padding: 20px;
}
table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
    background-color: #fff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}
th, td {
    padding: 10px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}
th {
    background-color: #f2f2f2;
}
tr:hover {
    background-color: #f5f5f5;
}
a {
    display: inline-block;
    padding: 10px 20px;
    background-color: #007bff;
    color: #fff;
    text-decoration: none;
    border-radius: 5px;
    margin-top: 10px;
}
a:hover {
    background-color: #0056b3;
}
h1 {
    color: #333;
}

    </style>
    <title>Painel Aluno</title>
</head>
<body>
    <?php
    echo "Seja bem vindo(a)" . $_SESSION['nome']; 
    ?>
<a href="sair.php">Sair</a>
    <h1>Listar usuarios</h1>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Login</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while($linha = mysqli_fetch_assoc($resultado)){
                ?>
            <tr>
                <td><?php echo $linha['id']?></td>
                <td><?php echo $linha['nome']?></td>
                <td><?php echo $linha['login']?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>