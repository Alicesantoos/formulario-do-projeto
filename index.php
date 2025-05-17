<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu primeiro Inglês</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Comic+Neue:wght@700&display=swap" rel="stylesheet">

   
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
    
      .card-img-top {
            height: 400px;
            object-fit: cover; 
        }

        .card-text {
          font-size: 1.3rem;
          font-weight: 600;
          text-align: center;
          color: #4b0082;
          margin: 0;
        }

        .card {
           transition: transform 0.3s ease, box-shadow 0.3s ease;
           border-radius: 16px;
        }

        .card:hover {
           transform: translateY(-10px);
           box-shadow: 0 12px 24px rgba(0, 0, 0, 0.2);
        }


        .btn-roxo {
            background-color: #800080; 
            color: white;
        }
        .btn-azul {
            background-color: rgb(39, 77, 182);
            color: #ffffff;
            border: 2px solid #F5DEB3;
        }
        .btn-float {
            display: inline-block;
            position: relative;
            will-change: transform;
            animation: float 2s ease-in-out infinite;
        }
 
        .btn-float i {
            animation: float 2s ease-in-out infinite;
            display: inline-block;
        }
        .btn-balance {
          display: inline-block;
          animation: balance 1.5s ease-in-out infinite !important;
        }
      
        .btn-azul:hover {
            box-shadow: 0 0 10px #F5DEB3;
            transition: box-shadow 0.3s ease;
        }
        @keyframes pulse {
            from {
                transform: scale(1);
            }
            to {
                transform: scale(1.2);
            }
        }
        @keyframes float {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-8px);
            }
        }

        @keyframes balance {
            25% { transform: translateX(-5px); }
            50% { transform: translateX(5px); }
            75% { transform: translateX(-5px); }
            100% { transform: translateX(0); }
        }

        @keyframes girar {
    100% { transform: rotate(360deg); }
}

.btn-balance i {
    display: inline-block;
    animation: girar 2s linear infinite;
}

.sobre-site {

    color: #4b0082;
    border-top: 2px dashed #cbad74;
    border-bottom: 2px dashed #cbad74;
    font-family: 'Comic Neue', cursive;
}
.sobre-site p {
  font-size: 1.4rem !important;
  line-height: 1.8;
}


.mascote-img {
  width: 100%;
  max-width: 500px;
  animation: mascoteFloat 2.5s ease-in-out infinite;
}


  </style>
  </head>
<body>

  <header class="cabecalho">
    <h1>Meu primeiro Inglês</h1>
</header>

  <section class="sobre-site py-5 text-center">
    <div class="container">
      <h2 class="mb-4">Sobre o site</h2>
      <p class="lead">
        O "Meu primeiro Inglês" é um site projetada para ser divertido e educativo, feito para ajudar crianças de qualquer idade a darem os primeiros passos na Língua Inglesa. Aqui, elas aprendem com atividades lúdicas, imagens coloridas e muita interação!
      </p>
    </div>
  </section>
  
  <div class="container text-center mt-5">
  <h2 class="fw-bold" style="color:rgb(183, 144, 29);">Aprenda conteúdos como :</h2>
</div>


<div class="container mt-4">
  <div class="row">
      <div class="col-md-4">
          <div class="card">
              <img src="imagens/img_site/img_cor.jpg" class="card-img-top" alt="Crianças se divertindo">
              <div class="card-body">
                  <p class="card-text"> As cores em Inglês.</p>
              </div>
          </div>
      </div>
      <div class="col-md-4">
          <div class="card">
              <img src="imagens/img_site/img_animais.avif" class="card-img-top" alt="Aula de inglês interativa">
              <div class="card-body">
                  <p class="card-text"> Nome dos animais em Inglês.</p>
              </div>
          </div>
      </div>
      <div class="col-md-4">
          <div class="card">
              <img src="imagens/img_site/imagem3.jpg" class="card-img-top" alt="Aprendizado divertido">
              <div class="card-body">
                  <p class="card-text">Primeiras frases.</p>
              </div>
          </div>
      </div>
  </div>
</div>

<div class="container d-flex justify-content-center mt-5">
  <img src="imagens/img_site/Gigi_balao.png" alt="Mascote fofo" class="mascote-img">
  </div>
</div>

<div class="d-flex justify-content-center flex-wrap gap-3 mt-5">
    <?php if (isset($_SESSION['usuario_id'])): ?>
        <!-- Usuário está logado -->
        <div class="text-center">
            <p class="fs-4">Olá, <strong><?= htmlspecialchars($_SESSION['usuario_nome']); ?></strong>! Você está logado.</p>
            <a href="Controller/logout.php" class="btn btn-lg btn-danger px-5 py-3 fs-4">
                <i class="bi bi-box-arrow-right"></i> Sair da conta
            </a>
        </div>
    <?php else:?>
        <!-- Usuário não está logado -->
        <a href="cadastro.php" class="btn btn-lg btn-roxo btn-float px-5 py-3 fs-3 botao-custom">
            <i class="bi bi-fire"></i> Quero participar
        </a>
        <a href="loginpage.php" class="btn btn-lg btn-azul btn-balance px-5 py-3 fs-3 botao-custom">
            <i class="bi bi-star-fill"></i> Já faço parte
        </a>
    <?php endif; ?> 

    <?php if (!empty($_SESSION['usuario_adm']) && $_SESSION['usuario_adm'] === true): ?>
        <br>
        <a href="painel.php" class="btn btn-lg btn-warning px-5 py-3 fs-4">
            <i class="bi bi-speedometer2"></i> Voltar ao Painel
        </a>
    <?php endif; ?>
</div>

<div class="text-center" style="margin-top: 20px;"></div>

</div>
</div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</html>