<?php
session_start();
include("conexao.php");
$db = Conexao::conexaoBanco();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $nome= $_POST['nome'] ?? '';  
    $email= $_POST['email'] ?? '';  
    $senha = $_POST['senha'] ?? '';  
    $confirme_senha = $_POST['confirme_senha'] ?? ''; 

}

    if ($senha !== $confirme_senha) {
        $_SESSION['senha_erro'] = 'As senhas não coincidem!';
        header('Location: ../cadastro.php');
        exit;
    }

    $senha_hash = password_hash($senha, PASSWORD_DEFAULT);

    $sql = "INSERT INTO adm (nome, email, senha) 
            VALUES (:nome, :email, :senha)";

    $stmt = $db->prepare($sql);
    $sucesso = $stmt->execute([
        ':nome' => $nome,
        ':email' => $email,
        ':senha' => $senha_hash
    ]);

    if ($sucesso) {
        header('Location: ../loginpage.php');
        exit;
    }
?>