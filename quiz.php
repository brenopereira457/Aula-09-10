<?php
session_start();
require_once "conexao.php";

if (!isset($_SESSION['usuario_id'])) {
    header('Location: index.php?erro=' . urlencode('Faça login para continuar.'));
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escolher Quiz</title>
</head>
<body>
    <div>
        <h1>Olá, <?= htmlspecialchars($_SESSION['usuario_nome'] ?? $_SESSION['usuario_email']) ?>!</h1>
        <div>
            <a href="perfil.php">Meu Perfil</a>
            <a href="logout.php">Sair</a>
        </div>
    </div>

    <div>
        <div>
            <h2>Quiz de Naruto</h2>
            <p>Perguntas variadas sobre Naruto.</p>
            <div>
                <a href="quiz_naruto.php">Começar</a>
            </div>
        </div>
    </div>

    <div>
        <div>
            <h2>Quiz de Matemática</h2>
            <p>Operações basicas, logicas e raciocinio.</p>
            <div>
                <a href="quiz_matematica.php">Começar</a>
            </div>
        </div>
    </div>

    <div>
        <div>
            <h2>Quiz de Tecnologia</h2>
            <p>Perguntas gerais sobre a tecnologia.</p>
            <div>
                <a href="quiz_tecnologia.php">Começar</a>
            </div>
        </div>
    </div>
</body>
</html>