<?php
session_start();
include("conexao.php");
$db = Conexao::conexaoBanco();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $nome_crianca = $_POST['nome_crianca'] ?? '';  
    $nome_responsavel = $_POST['nome_responsavel'] ?? ''; 
    $email_responsavel = $_POST['email_responsavel'] ?? '';  
    $senha = $_POST['senha'] ?? '';  
    $confirme_senha = $_POST['confirme_senha'] ?? ''; 

}

    if ($senha !== $confirme_senha) {
        $_SESSION['senha_erro'] = 'As senhas não coincidem!';
        header('Location: ../cadastro.php');
        exit;
    }

    $senha_hash = password_hash($senha, PASSWORD_DEFAULT);

    $sql = "INSERT INTO usuarios (nome_crianca, nome_responsavel, email_responsavel, senha) 
            VALUES (:nome_crianca, :nome_responsavel, :email_responsavel, :senha)";

    $stmt = $db->prepare($sql);
    $sucesso = $stmt->execute([
        ':nome_crianca' => $nome_crianca,
        ':nome_responsavel' => $nome_responsavel,
        ':email_responsavel' => $email_responsavel,
        ':senha' => $senha_hash
    ]);

    if ($sucesso) {
        header('Location: ../loginpage.php');
        exit;
    }
?>