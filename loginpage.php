<?php include('Model/login.php'); ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilo/css/style.css">
    <link rel="stylesheet" href="css/bootstra.min.css"> <link rel="stylesheet" href="css/bootstra.min.css"><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
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
    <a href="index.php" class="btn btn-topo">
        <i class="bi bi-house-door-fill" style="font-size: 1.2rem;"></i> Início
    </a>
</header>

    <div class="form">
        <form action="Model/login.php" method="post">
            <h1> Login </h1>
     
            <div class="form-group">
                <label for="Email"> E-mail do responsável</label> <br>
                <input type="email" id="email" name="email" placeholder="Escreva seu e-mail" class="form-control" >
            </div>

            <div class="form-group">
                <label for="senha"> Senha </label> <br>
                <input type="password" id="senha" name="senha" placeholder="5 caracteres " class="form-control">
            </div><br>

            <button class="btn font-weight-bold" name="submit" a href="index.php"> Entrar </a></button>
            <div class="text-center" style="margin-top: 20px;"></div>
            <p> Não tem uma conta ?<a href="cadastro.php"> Aperte aqui</a></p>
        </form>
    </div>
    
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</html>