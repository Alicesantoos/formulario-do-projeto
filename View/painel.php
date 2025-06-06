
<?php include('../Model/CRUD.php');
include('../Controller/restrito.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Painel do Administrador</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .voltar{
        display: flex;
        text-decoration: none;
        transform: translateY(100%);
    }

    .voltar-content{
        text-decoration: none;
        font-size: 20px;
        color: #000;
    }

    .voltar button{
        border: none;
    }
  </style>
</head>
<body class="bg-light">

<div class="container py-4">
    <div class="voltar">
        <button><a href="../index.php" class="voltar-content">Página Principal</a></button>
    </div>
    <h2 class="text-center mb-4">Painel de Administração de Usuários</h2>

  <?php foreach (['message-user-success', 'message-update', 'message-delete', 'message-erro'] as $msg): ?>
    <?php if (isset($_SESSION[$msg])): ?>
      <div class="alert alert-<?= str_contains($msg, 'erro') ? 'danger' : 'success' ?> alert-dismissible fade show">
        <?= $_SESSION[$msg]; unset($_SESSION[$msg]); ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
      </div>
    <?php endif; ?>
  <?php endforeach; ?>

  <div class="card mb-4">
    <div class="card-header">Adicionar/Editar Usuário</div>
    <div class="card-body">
      <form method="post">
        <input type="hidden" name="id" value="">

        <div class="row g-3">
          <div class="col-md-4">
            <label>Nome da Criança</label>
            <input type="text" name="nome_crianca" class="form-control" required>
          </div>
          <div class="col-md-4">
            <label>Nome do Responsável</label>
            <input type="text" name="nome_responsavel" class="form-control">
          </div>
          <div class="col-md-4">
            <label>Email do Responsável</label>
            <input type="email" name="email_responsavel" class="form-control" required>
          </div>
          <div class="col-md-4">
            <label>Senha</label>
            <input type="password" name="senha" class="form-control" required>
          </div>
        </div>

        <button type="submit" name="adicionar" class="btn btn-primary mt-3">Adicionar</button>
      </form>
    </div>
  </div>

  <form method="get" class="mb-3">
    <div class="input-group">
      <input type="text" name="pesquisar" class="form-control" placeholder="Pesquisar por nome ou email">
      <button type="submit" class="btn btn-outline-secondary">Buscar</button>
    </div>
  </form>

  <div class="table-responsive">
    <table class="table table-bordered table-striped">
      <thead class="table-dark">
        <tr>
          <th>ID</th>
          <th>Nome Criança</th>
          <th>Nome Responsável</th>
          <th>Email</th>
          <th>Ações</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($usuarios as $usuario): ?>
        <tr>
          <td><?= $usuario['id'] ?></td>
          <td><?= htmlspecialchars($usuario['nome_crianca']) ?></td>
          <td><?= htmlspecialchars($usuario['nome_responsavel']) ?></td>
          <td><?= htmlspecialchars($usuario['email_responsavel']) ?></td>
          <td>
            <button 
              type="button"
              class="btn btn-warning btn-sm editar-btn"
              data-id="<?= $usuario['id'] ?>"
              data-nome-crianca="<?= htmlspecialchars($usuario['nome_crianca']) ?>"
              data-nome-responsavel="<?= htmlspecialchars($usuario['nome_responsavel']) ?>"
              data-email-responsavel="<?= htmlspecialchars($usuario['email_responsavel']) ?>"
            >
              Editar
            </button>
            <a href="?deletar=<?= $usuario['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Deseja realmente deletar este usuário?')">Excluir</a>
          </td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
document.addEventListener('DOMContentLoaded', () => {
  const botoesEditar = document.querySelectorAll('.editar-btn');
  
  botoesEditar.forEach(botao => {
    botao.addEventListener('click', () => {
      const id = botao.getAttribute('data-id');
      const nomeCrianca = botao.getAttribute('data-nome-crianca');
      const nomeResponsavel = botao.getAttribute('data-nome-responsavel');
      const emailResponsavel = botao.getAttribute('data-email-responsavel');

      document.querySelector('input[name="id"]').value = id;
      document.querySelector('input[name="nome_crianca"]').value = nomeCrianca;
      document.querySelector('input[name="nome_responsavel"]').value = nomeResponsavel;
      document.querySelector('input[name="email_responsavel"]').value = emailResponsavel;

      const botaoForm = document.querySelector('form button[type="submit"]');
      botaoForm.name = 'editar';
      botaoForm.textContent = 'Atualizar';
    });
  });
});
</script>
</body>
</html>
