<?php
session_start();
require_once '../conexao.php';

if (!isset($_SESSION['usuario_id'])) {
    die("Usuário não está logado.");
}

$usuario_id = $_SESSION['usuario_id'];

try {
    $conexao = Conexao::conexaoBanco();

    $sql = "DELETE FROM usuarios WHERE id = $usuario_id";
    $resultado = $conexao->exec($sql);

    if ($resultado) {
        session_unset();
        session_destroy();
        header("Location: adeus.php");
        exit;
    } else {
        $erro = $conexao->errorInfo();
        echo "Erro ao excluir: <pre>" . print_r($erro, true) . "</pre>";
    }

} catch (PDOException $e) {
    echo "Erro no try-catch: " . $e->getMessage();
}
