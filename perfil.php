<?php
session_start();
require_once "conexao.php";

if (!isset($_SESSION['id'])) {
    header('Location: index.php?erro=' . urlencode('Faça login para continuar.'));
    exit;
}

$userId = (int) $_SESSION['id]'];
$msg = "";

$stmt = $conn -> prepare("SELECT id, nome, email, senha FROM usuarios WHERE id = ? LIMIT 1");
$stmt -> bind_param("I", $userId);
$stmt -> execute();
$result = $stmt -> get_result();

if (!$result|| $result -> num_rows){
    session_unset();
    session_destroy();
    header('Location: index.php?erro=' . urlencode('Sessão inválida. Faça o login novamente.'));
    exit;
}

$user = $result -> fetch_assoc();
$stmt -> close();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $noveNome = trim($_POST['nome'] ?? $user['nome']);
    $senhaAtual = $_POST['senha_atual'] ?? '';
    $senhaNova = $_POST['senha_nova'] ?? '';
    $senhaConf = $_POST['senha_confirma'] ?? '';

    if ($novoNome === '' ) {
        $msg = "Informe um nome válido.";
    } else {
        $okNome = true;
        if ($novoNome !== $user['nome']) {
            $updNome = $conn -> prepare ("UPDATE usuarios SET nome = ? WHERE id = ?");
            $updNome -> bind_param("si", $novoNome, $userId);
            $okNome = $upNome -> execute();
            $updNome -> close();

            if($okNome) {
                $_SESSION['usuario_nome'] = $novoNome;
            }
        }
    }
}

?>