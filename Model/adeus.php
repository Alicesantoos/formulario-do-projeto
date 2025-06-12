<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Até logo!</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: linear-gradient(135deg, #f7d9ec, #d4c1f4);
      font-family: 'Comic Sans MS', cursive;
      color: #4b0082;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
      margin: 0;
    }
    .mensagem {
      background-color: #ffffffdd;
      border-radius: 20px;
      padding: 40px;
      text-align: center;
      box-shadow: 0 0 15px rgba(0,0,0,0.2);
      max-width: 500px;
    }
    .mensagem h1 {
      font-size: 2.5rem;
      margin-bottom: 20px;
    }
    .mensagem p {
      font-size: 1.3rem;
    }
    .mascote {
      width: 150px;
      margin-top: 20px;
      animation: float 2s ease-in-out infinite;
    }
    @keyframes float {
      0%, 100% { transform: translateY(0); }
      50% { transform: translateY(-10px); }
    }
    .btn-voltar {
      margin-top: 30px;
      font-size: 1.2rem;
      background-color: #b159be;
      border: none;
      padding: 10px 25px;
      color: white;
      border-radius: 10px;
      transition: background-color 0.3s;
    }
    .btn-voltar:hover {
      background-color: #9848a3;
    }
  </style>
</head>
<body>

<div class="mensagem">
  <h1>Sentiremos sua falta 😢</h1>
  <p>Sua conta foi excluída com sucesso.</p>
  <p>Esperamos te ver novamente em breve!</p>
  <img src="imagens/img_site/Gigi_balao.png" alt="Mascote se despedindo" class="mascote">
  <br>
  <a href="index.php" class="btn-voltar">Voltar para a Página Inicial</a>
</div>

</body>
</html>
