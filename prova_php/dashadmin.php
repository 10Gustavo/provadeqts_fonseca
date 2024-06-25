<?php
session_start();
include("seguranca.php"); // Inclua seu arquivo de segurança aqui
include("conexao.php"); // Inclua seu arquivo de conexão aqui

// Consulta SQL para selecionar todos os usuários
$sql = "SELECT * FROM usuarios";
$resultado = mysqli_query($conexao, $sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel Administrativo</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 20px;
        }
        h1 {
            margin-top: 20px;
        }
        form {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        button {
            padding: 5px 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 4px;
        }
        button:hover {
            background-color: #45a049;
        }
        a {
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div>
        <?php echo "Seja bem vindo(a), " . $_SESSION['nome']; ?>
        <a href="sair.php">Sair</a>
    </div>

    <h1>CRUD de Usuários</h1>

    <!-- Formulário para inserir novo usuário -->
    <form action="inserir.php" method="post">
        <input type="text" name="nome" placeholder="Digite o nome" required>
        <input type="email" name="login" placeholder="Digite seu email" required>
        <input type="password" name="senha" placeholder="Digite sua senha" required>
        <select name="nivel_acesso" required>
            <option value="admin">Administrador</option>
            <option value="aluno">Aluno</option>
        </select>
        <input type="submit" value="Cadastrar">
    </form>

    <h1>Listar Usuários</h1>

    <!-- Tabela para listar usuários -->
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Login</th>
                <th>Senha</th>
                <th>Nível de Acesso</th>
                <th>Ação</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($linha = mysqli_fetch_assoc($resultado)) { ?>
                <tr>
                    <td><?php echo $linha['id']; ?></td>
                    <td><?php echo $linha['nome']; ?></td>
                    <td><?php echo $linha['login']; ?></td>
                    <td><?php echo $linha['senha']; ?></td>
                    <td><?php echo $linha['nivel_acesso']; ?></td>
                    <td>
                        <button>Atualizar</button>
                        <a href="deletar.php?id=<?php echo $linha['id']; ?>">
                            <button>Deletar</button>
                        </a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>
