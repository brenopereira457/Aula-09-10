<?php
session_start();
include("conexao.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Buscando o determinado usuário no Banco de Dados
    $sql = "SELECT * FROM usuarios WHERE email='$email' LIMIT 1";
    $result = $conn -> query($sql);

    if ($result -> num_rows > 0) {
        $usuario = $result -> fetch_assoc();

        // Verificando a senha com Hash (password_hash)
        if (password_verify($senha, $usuario['senha'])) {
            $_SESSION['usuario'] = $usuario['nome'];
            header("Location: resultado.php");
            exit();
        } else {
            echo "Senha incorreta. <a href='index.php'>Tentar novamente</a>";
        }
    } else {
        echo "Usuário não encontrado. <a href='index.php'>Voltar</a>";
    }
}
?>
