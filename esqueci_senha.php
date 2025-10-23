<?php
session_start();
require_once "conexao.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = trim($_POST['email'] ?? "");
    $nova = $_POST['nova_senha'] ?? "";
    $conf = $_POST['confirmar_senha'] ?? "";

    if ($email === "" || $nova === "" || $conf === "") {
        $mensagem = "Preencha todos os campos.";
    } elseif ($nova !== $conf) {
        $mensagem = "A confirmação de senha não confere.";
    } else {
        // 1) Verificar se o e-mail está existente no banco de dados
        $stmt = $conn -> prepare("SELECT id FROM usuarios WHERE email = ? LIMIT 1"); // buscar o email na tabela email
        $stmt -> bind_param("s", $email); // ver se o email é em string
        $stmt -> execute();
        $stmt -> store_result();

        if ($stmt -> num_rows === 0) {
            $mensagem = "E-mail não encontrado.";
        } else {
            // 2) Atualizar a senha com password_hash
            $hash = password_hash($nova, PASSWORD_DEFAULT); // Trocar a senha
            $stmt -> free_result(); // fechar o resultado
            $stmt -> close(); // enviar o commit

            $upd = $conn -> prepare("UPDATE usuarios SET senha = ? WHERE email = ?");
            $upd -> bind_param("ss", $hash, $email);

            if ($upd -> execute()) {
                $mensagem = "Senha atualizada com sucesso! <a href='index.php'>Fazer login</a>";
            } else {
                $mensagem = "Erro ao atualizar a senha. Tente novamente.";
            }

            $upd -> close();
        }
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esqueci a senha</title>
</head>
<body>
    <h1>Redefinir a senha</h1>

    <?php if (!empty($mensagem)) : ?>
        <p><?= $mensagem ?></p>
    <?php endif; ?>

    <form method="POST">
        <label>E-mail Cadastrado</label><br>
        <input type ="email" name = "email" required><br><br>

        <label>Nova Senha</label><br>
        <input type="password" name="nova_senha" minlength="6" required><br><br>

        <label>Confirmar Nova Senha</label><br>
        <input type="password" name ="confirmar_senha" minlength="6" required><br><br>

        <div class="btn"><button type="submit">Atualizar Senha</button></div>
    </form>
</body>
</html>