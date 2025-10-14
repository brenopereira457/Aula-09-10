<?php
    session_start();
    if (isset($_SESSION['usuario'])) {
        header("Location: resultado.php");
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini-Projeto Quiz</title>
    <link rel="stylesweet" ref="">
</head>
<body>
    <h1>Bem vindo ao Quiz</h1>

    <form action='login.php' method="POST">
        <label>Email:</label>
        <input type="email" name="email" required>

        <br>
        <br>

        <label>Senha:</label>
        <input type="password" name="senha" required>

        <br>
        <br>

        <button type="submit">Entrar</button>
    </form>
    <!-- Adicionando nova linha para o usuario que esquece a senha -->
     <br>
     <a href="esqueci_senha.php">Esqueci a senha </a>
     
    <br>
    <a href="registro.php"><button type="button">Cadastrar</a>
</body>
</html>