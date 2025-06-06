<?php
session_start();
include('../Model/conexao.php');

$db = Conexao::conexaoBanco();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'] ?? '';
    $senha = $_POST['senha'] ?? '';

    
    if (empty($email) || empty($senha)) {
        $_SESSION['erro-login'] = 'Preencha todos os campos.';
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
            $_SESSION['usuario_nome'] = $admin['nome'];
            header('Location: ../View/painel.php');
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


        $_SESSION['erro-login'] = 'E-mail ou senha incorretos. Por favor, tente novamente ou cadastre-se.';
        header('Location: ../View/loginpage.php');
        exit();

    } catch (PDOException $e) {
        $_SESSION['erro-login'] = 'Erro no servidor ao tentar fazer login. Tente novamente mais tarde.';
        header('Location: ../View/loginpage.php');
        exit();
    }
}
?>
