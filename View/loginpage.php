<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Primeiro Inglês - Login</title>
    <link rel="stylesheet" href="../estilo/css/style.css">
    <link rel="stylesheet" href="css/bootstra.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

</head>
<body>

    <style>
        body {
            font-family: 'Fredoka', sans-serif;
        }
        .cabecalho {
            background-color: #b159be;
            padding: 10px;
            text-align: center;
        }
        .cabecalho h1 {
            color: #cbad74;
            font-size: 2.5rem;
            font-weight: bold;
        }
        .cabecalho .btn-topo {
            position: absolute;
            top: 20px;
            right: 20px;
            background-color: white;
            color: #000000;
            border: 2px solid #800080;
        }
    </style>

    <header class="cabecalho">
        <h1>Meu primeiro Inglês</h1>
        <a href="../index.php" class="btn btn-topo">
            <h5 class="bi bi-house-door-fill" style="font-size: 1.2rem;">Início</h5> 
        </a>
    </header>

    <?php if (isset($_SESSION['erro-login'])): ?>
        <div class="alert alert-danger text-center mt-3" role="alert">
            <?= $_SESSION['erro-login']; ?>
        </div>
        <?php unset($_SESSION['erro-login']); ?>
    <?php endif; ?>

    <div class="form mt-4">
        <form action="../Controller/login.php" method="post" class="container" style="max-width: 400px;">
            <h1 class="text-center mb-4">Login</h1>

            <div class="form-group mb-3">
                <label for="email">E-mail do responsável</label>
                <input type="email" id="email" name="email" placeholder="Escreva seu e-mail" class="form-control" required>
            </div>

            <div class="form-group mb-3">
                <label for="senha">Senha</label>
                <input type="password" id="senha" name="senha" placeholder="5 caracteres" class="form-control" required>
            </div>

            <button class="btn btn-primary w-100" type="submit" name="submit">Entrar</button>

            <div class="text-center mt-3">
                <p>Não tem uma conta? <a href="cadastro.php">Cadastre-se aqui</a></p>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
