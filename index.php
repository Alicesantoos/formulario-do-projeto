<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Primeiro Inglês</title>
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
          position: relative;
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

#OpenE{
    border-radius: 20px;
    position: fixed;
    text-align: center;
    top: 40%;
    left: 50%;
    transform: translateX(-50%);
    background-color:rgb(219, 82, 82);
    max-width: 200px;
    width: 100%;
    padding: 20px;
    z-index: 999;
}

#excluir-conteudo{
    font-weight: 600;
    font-size: 17px;
}

#OpenE #Sim{
    border: none;
    background-color: rgb(219, 82, 82);
    border-radius: 10px;
    width: 50px;
    transition: 0.3s;
}

#OpenE #Nao{
    border: none;
    border-radius: 10px;
    width: 50px;
    background-color:#fff;
}

#OpenE #Sim:hover{
    border: none;
    border-radius: 10px;
    width: 50px;
    background-color:#fff;
}

.botao-excluir{
    display: flex;
    position: absolute;
    max-width: 115px;
    width: 100%;
    height: 35px;
    justify-content: center;
    align-items: center;
    right: 10px;
    top: 25%;
    border: none;
    background-color:#a545b4;
    border-radius: 10px;
}

.botao-excluir:hover{
    background-color:#a862b3;
}

#content-painel{
    display: flex;
    justify-content: center;
    align-items: center;
    margin: auto;
}

  </style>
  </head>
<body>

<?php if (isset($_GET['erro']) && $_GET['erro'] == 'login'): ?>
  <div class="alert alert-warning text-center fs-5" role="alert">
    ⚠️ Você precisa fazer o login para acessar esse conteúdo.
  </div>
<?php endif; ?>

<header class="cabecalho">
    <h1>Meu primeiro Inglês</h1>
    <?php if (isset($_SESSION['usuario_id'])): ?>
<button class="botao-excluir" onclick="OpenExclude()">Excluir Conta</button>
    <?php endif; ?>
</header>

<?php if (isset($_SESSION['usuario_id'])): ?>
    <?php
        $primeiro_nome = explode(" ", $_SESSION['usuario_nome'])[0];
    ?>
    <div class="text-center mt-3">
        <p class="fs-4">Oi <strong><?= htmlspecialchars($primeiro_nome); ?></strong>, que bom que você chegou!</p>
    </div>
<?php endif; ?>

<div id="fundo" style="
display: none;
background-color:rgb(0, 0, 0, 0.5);
position:fixed;
top:0;
left:0;
width:100%;
height:100%;
z-index:998;
">
</div>

<div id="OpenE" style="display: none;">
    <div id="excluir-conteudo">
        <p>Você realmente deseja nos deixar?! :(</p>
        <button id="Sim" onclick="ConfirmExclude()" >Sim</button>
        <button class="botao" id="Nao" onclick="CloseExclude()" >Não</button>
    </div>
</div>

<section class="sobre-site py-5">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-8">
        <h2 class="mb-4">Sobre o site</h2>
        <p class="lead">
          O "Meu Primeiro Inglês" é um site projetado para ser divertido e educativo, feito para ajudar crianças de qualquer idade a darem os primeiros passos na Língua Inglesa. Aqui, elas aprendem com atividades lúdicas, imagens coloridas e muita interação!
        </p>
      </div>
      <div class="col-md-4 text-center">
        <img src="imagens/img_site/Logo.png" alt="Logo do site" class="img-fluid" style="max-width: 250px;">
      </div>
    </div>
  </div>
</section>
  
  <div class="container text-center mt-5">
  <h2 class="fw-bold" style="color:rgb(183, 144, 29);">Aprenda nossos conteúdos :</h2>
</div>


<div class="container mt-4">
  <div class="row">
      <div class="col-md-4">
           <a href="view/cod_animais/animais.php" style="text-decoration: none;">
          <div class="card">
              <img src="imagens/img_site/img_animais.avif" class="card-img-top" alt="Animais">
              <div class="card-body">
                  <p class="card-text"> Nome dos animais em inglês.</p>
              </div>
          </div>
           </a>
      </div>
      <div class="col-md-4">
        <a href="view/cod_colors/colors.php" style="text-decoration: none;">
          <div class="card">
              <img src="imagens/img_site/img_cor.jpg" class="card-img-top" alt="Cores">
              <div class="card-body">
                  <p class="card-text"> As cores.</p>
              </div>
          </div>
        </a>
      </div>
      <div class="col-md-4">
          <a href="View/cod_fruits/fruits.php" style="text-decoration: none;">
          <div class="card">
              <img src="imagens/img_site/img_fruits.jpg" class="card-img-top" alt="Frutas">
              <div class="card-body">
                  <p class="card-text"> Nome das frutas.</p>
              </div>
          </div>
          </a>
      </div>
  </div>
</div>

    <?php if(isset($_SESSION['usuario_id'])): ?>
    <?php else: ?>
    <div class="container d-flex justify-content-center mt-5">
        <img src="imagens/img_site/Gigi_balao.png" alt="Mascote fofo" class="mascote-img">
    </div>
    <?php endif;?>
</div>

<div class="d-flex justify-content-center flex-wrap gap-3 mt-5">
    <?php if (isset($_SESSION['user_type'])): ?>
        
        <div class="text-center">
            <a href="Controller/logout.php" class="btn btn-lg btn-danger px-5 py-4 fs-3">
                <i class="bi bi-box-arrow-right"></i> Sair da conta
            </a>
        </div>
    <?php else:?>
        
        <a href="View/cadastro.php" class="btn btn-lg btn-roxo btn-float px-5 py-3 fs-3 botao-custom">
            <i class="bi bi-fire"></i> Quero participar
        </a>
        <a href="View/loginpage.php" class="btn btn-lg btn-azul btn-balance px-5 py-3 fs-3 botao-custom">
            <i class="bi bi-star-fill"></i> Já faço parte
        </a>
    <?php endif; ?> 

    <?php if (isset($_SESSION['user_type']) && $_SESSION['user_type'] == 'adm'): ?>
        <br>
        <a href="View/painel.php" class="btn btn-lg btn-warning px-5 py-3 fs-4">
            <i class="bi bi-speedometer2" id="content-painel"></i> Voltar ao Painel
        </a>
    <?php endif; ?>
</div>

<div class="text-center" style="margin-top: 20px;"></div>

</div>
</div>

<script>
  setTimeout(() => {
    const alerta = document.querySelector('.alert');
    if (alerta) alerta.style.display = 'none';
  }, 6000);
</script>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
    
    function OpenExclude() {
        document.getElementById('OpenE').style.display = 'flex';
        document.getElementById('fundo').style.display = 'block';
    }

    function CloseExclude() {
        document.getElementById('OpenE').style.display = 'none';
        document.getElementById('fundo').style.display = 'none';
    }

    function ConfirmExclude() {
        window.location.href = "Model/excluirusuario.php";
    }
</script>
</html>