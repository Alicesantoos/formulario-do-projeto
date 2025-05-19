<?php
session_start();
include('conexao.php');

$db = Conexao::conexaoBanco();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'] ?? '';
    $senha = $_POST['senha'] ?? '';

    if (empty($email) || empty($senha)) {
        $_SESSION['erro'] = 'Preencha todos os campos.';
        header('Location: ../View/loginpage.php');
        exit();
    }

    try {
        $stmt = $db->prepare("SELECT * FROM adm WHERE email = :email");
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        $admin = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($admin && password_verify($senha, $admin['senha'])) {
            $_SESSION['user_type'] = 'adm';
            $_SESSION['adm_id'] = $admin['id'];
            $_SESSION['usuario_nome'] = $admin['nome'] ?? 'Administrador';

            header('Location: ../painel.php');
            exit();
        }

        $stmt = $db->prepare("SELECT * FROM usuarios WHERE email_responsavel = :email");
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($usuario && password_verify($senha, $usuario['senha'])) {
            $_SESSION['user_type'] = 'usuario';
            $_SESSION['usuario_id'] = $usuario['id'];
            $_SESSION['usuario_nome'] = $usuario['nome_crianca'];
            $_SESSION['usuario_email'] = $usuario['email_responsavel'];

            header('Location: ../index.php');
            exit();
        }

        $_SESSION['erro-login'] = 'E-mail ou senha incorretos estão incorretos.';
        header('Location: ../loginpage.php');
        exit();

    } catch (PDOException $e) {
        echo "Erro ao fazer login: " . $e->getMessage();
    }
}
?>
