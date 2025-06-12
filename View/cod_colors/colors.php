<?php
session_start();

if (!isset($_SESSION['usuario_id'])) {
    header("Location: ../../index.php?erro=login");
    exit();
}
?>
<?php include('../../Controller/restrito.php') ?>


<!DOCTYPE html> 
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Meu Primeiro Inglês - Cores</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../../estilo/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

  <style>
    .cabecalho .btn-topo {
      position: absolute;
      top: 16px;
      left: 16px;
      background-color: #cfc397;
      color: #000000;
      border: 3px solid #800080;
      font-family: cursive;
      font-size: 1.3rem;
    }

    .arrow-button {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      font-size: 5rem;
      background: transparent;
      border: none;
      color: purple;
      cursor: pointer;
      z-index: 10;
      display: none;
    }

    .arrow-button i {
      font-size: 5rem;
      color: purple;
    }

    .carousel-inner .card-img-top {
      width: 100%;
      height: 490px;
      object-fit: cover;
    }

    .carousel-inner .card {
      max-width: 2000px;
      margin: 0 auto;
    }

    .card[data-name="cow"] .card-img-top {
      height: 400px;
    }

    .card[data-name="fish"] .card-img-top {
      height: 410px;
    }

    .balloon {
  width: 60px;
  height: 80px;
  background-color:rgb(248, 204, 71);
  border-radius: 50% 50% 50% 50%;
  position: relative;
  cursor: pointer;
  animation: float 2s ease-in-out infinite;
}

.balloon::after {
  content: '';
  position: absolute;
  bottom: -10px;
  left: 50%;
  width: 2px;
  height: 20px;
  background: #888;
  transform: translateX(-50%);
}

@keyframes float {
  0% { transform: translateY(0px); }
  50% { transform: translateY(-10px); }
  100% { transform: translateY(0px); }
}
  </style>
</head>

<body>
  <header class="cabecalho">
    <a href="../../index.php" class="btn btn-topo">
      <h1 class="bi bi-arrow-left-circle-fill" style="font-size: 1.3rem;">Voltar</h1> 
    </a>
  </header> 

  <header class="text-center p-2" style="background-color: #c40af3;">
    <button id="colorsBtn" class="custom-btn" onclick="playHeaderAudio()">Colors</button>
    <audio id="colorsAudio">
      <source src="../../audios/audios_colors/audio_colors.mp3" type="audio/mp3">
    </audio>
  </header>

    <div id="mascote-msg-fala" style="display: flex; justify-content: center; align-items: center; 
background-color: rgba(0, 0, 0, 0.5); position: fixed; top: 0; left: 0; 
width: 100%; height: 100%; z-index: 9999;">
  <div style="position: relative; text-align: center;">
    <img src="../../imagens/img_site/img_instrução.png" alt="Girafinha falando" 
         style="max-width: 90vw; max-height: 90vh; border-radius: 20px;">
    <button onclick="fecharMensagem()" 
        style="position: absolute; bottom: 10px; right: 10px; 
        background-color: #a545b4; color: white; border: none; 
         border-radius: 20px; padding: 15px 30px; font-size: 1.4rem;">
        Combinado !
    </button>
  </div>
</div>

  <div id="carouselExampleControls" class="carousel slide" data-bs-interval="false">
    <div class="carousel-inner">

      <div class="carousel-item active">
        <div class="card text-center shadow" data-name="red" style="position: relative;">
          <img src="../../imagens/img_colors/img_red.jpg" class="card-img-top" alt="Vermelho" onclick="playAudio('red')">
          <div class="card-body">
            <h5 class="card-title">Red</h5>
            <div class="star-bar">
              <span class="star">★</span>
              <span class="star">★</span>
              <span class="star">★</span>
            </div>
            <audio id="redAudio">
              <source src="../../audios/audios_colors/audio_red.mp3" type="audio/mp3">
            </audio>
          </div>
          <button class="arrow-button" style="right: 5px;" id="arrow-red" onclick="nextSlide()">
            <i class="bi bi-arrow-right-circle-fill"></i>
          </button>
        </div>
      </div>

      <div class="carousel-item">
        <div class="card text-center shadow" data-name="blue" style="position: relative;">
          <img src="../../imagens/img_colors/img_blue.png" class="card-img-top" alt="Azul" onclick="playAudio('blue')">
          <div class="card-body">
            <h5 class="card-title">Blue</h5>
            <div class="star-bar">
              <span class="star">★</span>
              <span class="star">★</span>
              <span class="star">★</span>
            </div>
            <audio id="blueAudio">
              <source src="../../audios/audios_colors/audio_blue.mp3" type="audio/mp3">
            </audio>
          </div>

          <button class="arrow-button" style="left: 5px;" id="arrow-left-blue" onclick="prevSlide()">
            <i class="bi bi-arrow-left-circle-fill"></i>
          </button>
          <button class="arrow-button" style="right: 5px;" id="arrow-blue" onclick="nextSlide()">
            <i class="bi bi-arrow-right-circle-fill"></i>
          </button>
        </div>
      </div>

            <div class="carousel-item">
        <div class="card text-center shadow" data-name="green" style="position: relative;">
          <img src="../../imagens/img_colors/img_green.png" class="card-img-top" alt="Verde" onclick="playAudio('green')">
          <div class="card-body">
            <h5 class="card-title">Green</h5>
            <div class="star-bar">
              <span class="star">★</span>
              <span class="star">★</span>
              <span class="star">★</span>
            </div>
            <audio id="greenAudio">
              <source src="../../audios/audios_colors/audio_green.mp3" type="audio/mp3">
            </audio>
          </div>

          <button class="arrow-button" style="left: 5px;" id="arrow-left-green" onclick="prevSlide()">
            <i class="bi bi-arrow-left-circle-fill"></i>
          </button>
          <button class="arrow-button" style="right: 5px;" id="arrow-green" onclick="nextSlide()">
            <i class="bi bi-arrow-right-circle-fill"></i>
          </button>
        </div>
      </div>

            <div class="carousel-item">
        <div class="card text-center shadow" data-name="yellow" style="position: relative;">
          <img src="../../imagens/img_colors/img_yellow.png" class="card-img-top" alt="Amarelo" onclick="playAudio('yellow')">
          <div class="card-body">
            <h5 class="card-title">Yellow</h5>
            <div class="star-bar">
              <span class="star">★</span>
              <span class="star">★</span>
              <span class="star">★</span>
            </div>
            <audio id="yellowAudio">
              <source src="../../audios/audios_colors/audio_yellow.mp3" type="audio/mp3">
            </audio>
          </div>

          <button class="arrow-button" style="left: 5px;" id="arrow-left-yellow" onclick="prevSlide()">
            <i class="bi bi-arrow-left-circle-fill"></i>
          </button>
          <button class="arrow-button" style="right: 5px;" id="arrow-yellow" onclick="nextSlide()">
            <i class="bi bi-arrow-right-circle-fill"></i>
          </button>
        </div>
      </div>

            <div class="carousel-item">
        <div class="card text-center shadow" data-name="pink" style="position: relative;">
          <img src="../../imagens/img_colors/img_pink.png" class="card-img-top" alt="Rosa" onclick="playAudio('pink')">
          <div class="card-body">
            <h5 class="card-title">Pink</h5>
            <div class="star-bar">
              <span class="star">★</span>
              <span class="star">★</span>
              <span class="star">★</span>
            </div>
            <audio id="pinkAudio">
              <source src="../../audios/audios_colors/audio_pink.mp3" type="audio/mp3">
            </audio>
          </div>

                    <button class="arrow-button" style="left: 5px;" id="arrow-left-pink" onclick="prevSlide()">
            <i class="bi bi-arrow-left-circle-fill"></i>
          </button>
          <button class="arrow-button" style="right: 5px;" id="arrow-pink" onclick="nextSlide()">
            <i class="bi bi-arrow-right-circle-fill"></i>
          </button>
        </div>
      </div>

      <div class="carousel-item">
  <div class="card text-center shadow" style="background-color: #fff0fb;">
    <div class="card-body">
      <h1 class="mb-3">🎉 Parabéns! 🎉</h1>
      <p class="lead mb-4">Você aprendeu os animais!🐾</p>

      <img src="../../imagens/trofeú.webp" alt="Troféu" style="width: 150px;" class="mb-3">

      <div class="balloons d-flex justify-content-center flex-wrap gap-3 mb-4">
        <div class="balloon" onclick="popBalloon(this)"></div>
        <div class="balloon" onclick="popBalloon(this)"></div>
        <div class="balloon" onclick="popBalloon(this)"></div>
        <div class="balloon" onclick="popBalloon(this)"></div>
      </div>

      <a href="../../index.php" class="btn btn-success m-1">
        <h4 class="bi bi-house-door-fill"> Aprender mais conteúdos</h4> 
      </a>

      <audio id="parabensAudio">

        <source src="../../audios/audios_congratolations/audio_alegria.mp3" type="audio/mp3">
      </audio>

      <audio id="popSound">
        <source src="../../audios/audios_congratolations/pop_audio.mp3" type="audio/mp3">
      </audio>
    </div>
  </div>
</div>

 <audio id="arrowSound">
    <source src="../../audios/audios_animais/seta_som.mp3" type="audio/mp3">
  </audio>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script>
  const allSlides = ['red', 'blue', 'green', 'yellow', 'pink', 'parabens'];

  let clickCounters = {
    red: 0,
    blue: 0,
    green: 0,
    yellow: 0,
    pink: 0
  };

  const visitedSlides = new Set(['red']); 

  function playAudio(nome) {
    const audio = document.getElementById(nome + 'Audio');
    if (audio) audio.play();

    if (!clickCounters.hasOwnProperty(nome)) return;

  clickCounters[nome]++;
    updateStars(nome, Math.min(clickCounters[nome], 3));

   if (clickCounters[nome] === 3) {
      visitedSlides.add(nome);

      const index = allSlides.indexOf(nome);
      if (index < allSlides.length - 2) {
        const setaDireita = document.getElementById("arrow-" + nome);
        if (setaDireita) setaDireita.style.display = "flex";
      }

      if (index > 0) {
        const setaEsquerda = document.getElementById("arrow-left-" + nome);
        const prevSlide = allSlides[index - 1];
        if (visitedSlides.has(prevSlide)) {
          if (setaEsquerda) setaEsquerda.style.display = "flex";
        }
      }

      const arrowSound = document.getElementById("arrowSound");
      if (arrowSound) arrowSound.play();

      const todosCompletos = allSlides.slice(0, 5).every(color => visitedSlides.has(color));
      if (todosCompletos) {
        setTimeout(() => {
          const carousel = bootstrap.Carousel.getOrCreateInstance(document.querySelector('#carouselExampleControls'));
          carousel.to(allSlides.length - 1);
          const parabensAudio = document.getElementById("parabensAudio");
          if (parabensAudio) parabensAudio.play();
        }, 800);
      }
    }
  }

  function updateStars(nome, count) {
    const stars = document.querySelectorAll(`.card[data-name="${nome}"] .star`);
    stars.forEach((star, idx) => {
      if (idx < count) {
        star.classList.add("filled");
      } else {
        star.classList.remove("filled");
      }
    });
  }

  function nextSlide() {
    const carouselEl = document.querySelector('#carouselExampleControls');
    const carouselInstance = bootstrap.Carousel.getInstance(carouselEl) || new bootstrap.Carousel(carouselEl);
    carouselInstance.next();
  }

  function prevSlide() {
    const carouselEl = document.querySelector('#carouselExampleControls');
    const carouselInstance = bootstrap.Carousel.getInstance(carouselEl) || new bootstrap.Carousel(carouselEl);
    carouselInstance.prev();
  }

  const carouselEl = document.querySelector('#carouselExampleControls');
  carouselEl.addEventListener('slid.bs.carousel', () => {
    if (colorsBtn) {
      animalsBtn.style.display = isLastSlide ? 'none' : 'inline-block';
    }

    const activeCard = document.querySelector('.carousel-item.active .card');
    if (!activeCard) return;

    const currentName = activeCard.getAttribute('data-name');
    if (!clickCounters.hasOwnProperty(currentName)) return;

    clickCounters[currentName] = 0;

    const setaDireita = document.getElementById("arrow-" + currentName);
    const setaEsquerda = document.getElementById("arrow-left-" + currentName);
    if (setaDireita) setaDireita.style.display = "none";
    if (setaEsquerda) setaEsquerda.style.display = "none";

  const index = allSlides.indexOf(currentName);
    if (index > 0) {
      const prevSlide = allSlides[index - 1];
      if (visitedSlides.has(prevSlide)) {
        if (setaEsquerda) setaEsquerda.style.display = "flex";
      }
    }
  });

  function playHeaderAudio() {
    const headerAudio = document.getElementById("colorsAudio");
    if (headerAudio) headerAudio.play();
  }

  function popBalloon(element) {
    element.style.visibility = 'hidden';
    const popSound = document.getElementById("popSound");
    if (popSound) popSound.play();
  }

  window.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('.custom-arrow, .custom-arrow-left').forEach(seta => {
      seta.style.display = 'none';
    });
  });

  function popBalloon(element) {
  element.style.backgroundColor = "#ffffff";
  element.style.transform = "scale(1.2)";
  element.innerHTML = "💥";
  element.style.transition = "0.3s";

  const popSound = document.getElementById("popSound");
  if (popSound) popSound.play();

  setTimeout(() => {
    element.style.display = "none";
  }, 500);
}
  function fecharMensagem() {
    document.getElementById("mascote-msg-fala").style.display = "none";
  }

</script>

</body>
</html>