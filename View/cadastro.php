
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu primeiro Inglês - Cadastro</title>
    <link rel="stylesheet" href="../estilo/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <style>

        body { 
         font-family: 'Fredoka', sans-serif;
         }
       .cabecalho {
           background-color: #b159be;
           padding: 10px;
           text-align: center;
       }
       .cabecalho h2 {
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
</head>
<body>

        <?php if(isset($_SESSION['senha_erro'])) : ?>
            <div class="alert alert-danger text-center fw-bold mx-3 mt-3" role="alert">
                <?= $_SESSION['senha_erro']; ?>
            </div>
            <?php unset($_SESSION['senha_erro']); ?>
        <?php endif; ?>

    <header class="cabecalho">
        <h2>Meu primeiro Inglês</h2>
        <a href="../index.php" class="btn btn-topo">
            <h5 class="bi bi-house-door-fill" style="font-size: 1.2rem;">Início</h5>
        </a>
    </header>
   
    <div class="form">
        <form action="../Model/cadastrar.php" method="POST">
            <h1> Cadastre-se </h1>
            <div class="form-group">
                <label for="nome_crianca"> Nome completo da criança</label> <br>
                <input type="text" id="nome_crianca" name="nome_crianca" placeholder="Escreva seu nome completo" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="nome_responsavel"> Nome completo do responsável</label> <br>
                <input type="text" id="nome_responsavel" name="nome_responsavel" placeholder="Escreva seu nome completo" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="email_responsavel"> E-mail do responsável</label> <br>
                <input type="email" id="email_responsavel" name="email_responsavel" placeholder="Escreva seu e-mail" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="senha"> Senha </label> <br>
                <input type="password" id="senha" name="senha" placeholder="5 caracteres" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="confirme_senha"> Confirme senha</label> <br>
                <input type="password" id="confirme_senha" name="confirme_senha" placeholder="Confirme sua senha" class="form-control" required>
            </div><br>
        
            <button type="submit" class="btn font-weight-bold">Criar</button>
            <div class="text-center" style="margin-top: 20px;"></div>
            <p> Já tem uma conta ?<a href="loginpage.php"> Aperte aqui</a></p>
        </form>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</html>