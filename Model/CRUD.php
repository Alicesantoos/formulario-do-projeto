<?php
session_start();  

include('conexao.php');  
$db = Conexao::conexaoBanco();  

if (isset($_POST["adicionar"])) {
    $nome_crianca = $_POST["nome_crianca"];
    $nome_responsavel = $_POST["nome_responsavel"];
    $email_responsavel = $_POST["email_responsavel"];
    $senha = password_hash($_POST["senha"], PASSWORD_DEFAULT);

    $stmt = $db->prepare("SELECT * FROM usuarios WHERE email_responsavel = ?");
    $stmt->execute([$email_responsavel]);
    if ($stmt->rowCount() > 0) {
        $_SESSION['message-erro'] = 'E-mail já cadastrado.';
    } else {
    
        $stmt = $db->prepare("INSERT INTO usuarios (nome_crianca, nome_responsavel, email_responsavel, senha) VALUES (?, ?, ?, ?)");
        if ($stmt->execute([$nome_crianca, $nome_responsavel, $email_responsavel, $senha])) {
            $_SESSION['message-user-success'] = 'Usuário cadastrado com sucesso!';
        }   
    }
}

if (isset($_POST["editar"])) {
    $id = $_POST["id"];
    $nome_crianca = $_POST["nome_crianca"];
    $nome_responsavel = $_POST["nome_responsavel"];
    $email_responsavel = $_POST["email_responsavel"];
    $senha = $_POST["senha"];

    $senhaHash = password_hash($senha, PASSWORD_DEFAULT);

    $stmt = $db->prepare("UPDATE usuarios SET nome = ?, email = ?, senha = ? WHERE id = ?");
    if ($stmt->execute([$nome_crianca, $email_responsavel, $senhaHash, $id])) {
        $_SESSION['message-update'] = 'Usuário atualizado com sucesso!';
    }
}

if (isset($_GET["deletar"])) {
    $id = $_GET["deletar"];
    
    $stmt = $db->prepare("DELETE FROM usuarios WHERE id = ?");
    if ($stmt->execute([$id])) {
        $_SESSION['message-delete'] = 'Usuário deletado com sucesso!';
    }
}

if (isset($_GET['pesquisar']) && !empty(trim($_GET['pesquisar']))) {
    $termo = '%' . trim($_GET['pesquisar']) . '%';
    $stmt = $db->prepare("SELECT * FROM usuarios WHERE nome_crianca LIKE ? OR email_responsavel LIKE ?");
    $stmt->execute([$termo, $termo]);
    $usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);
} else {
    $stmt = $db->query("SELECT * FROM usuarios");
    $usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?>
