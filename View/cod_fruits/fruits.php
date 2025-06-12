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
  <title>Meu Primeiro Inglês - Frutas</title>
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

  <header class="text-center p-2" style="background-color: #c40af3;">
    <button id="fruitsBtn" class="custom-btn" onclick="playHeaderAudio()">Fruits</button>
    <audio id="fruitsAudio">
      <source src="../../audios/audios_fruits/audio_fruits.mp3" type="audio/mp3">
    </audio>
  </header>

  <div id="carouselExampleControls" class="carousel slide" data-bs-interval="false">
    <div class="carousel-inner">

      <div class="carousel-item active">
        <div class="card text-center shadow" data-name="banana" style="position: relative;">
          <img src="../../imagens/img_fruits/banana.jpg" class="card-img-top" alt="Banana" onclick="playAudio('banana')">
          <div class="card-body">
            <h5 class="card-title">Banana</h5>
            <div class="star-bar">
              <span class="star">★</span>
              <span class="star">★</span>
              <span class="star">★</span>
            </div>
            <audio id="bananaAudio">
              <source src="../../audios/audios_fruits/audio_banana.mp3" type="audio/mp3">
            </audio>
          </div>
          <button class="arrow-button" style="right: 5px;" id="arrow-banana" onclick="nextSlide()">
            <i class="bi bi-arrow-right-circle-fill"></i>
          </button>
        </div>
      </div>

      <div class="carousel-item">
        <div class="card text-center shadow" data-name="apple" style="position: relative;">
          <img src="../../imagens/img_fruits/img_maçã.jpg" class="card-img-top" alt="Maçã" onclick="playAudio('apple')">
          <div class="card-body">
            <h5 class="card-title">Apple</h5>
            <div class="star-bar">
              <span class="star">★</span>
              <span class="star">★</span>
              <span class="star">★</span>
            </div>
            <audio id="appleAudio">
              <source src="../../audios/audios_fruits/audio_maça.mp3" type="audio/mp3">
            </audio>
          </div>

          <button class="arrow-button" style="left: 5px;" id="arrow-left-apple" onclick="prevSlide()">
            <i class="bi bi-arrow-left-circle-fill"></i>
          </button>
          <button class="arrow-button" style="right: 5px;" id="arrow-apple" onclick="nextSlide()">
            <i class="bi bi-arrow-right-circle-fill"></i>
          </button>
        </div>
      </div>

            <div class="carousel-item">
        <div class="card text-center shadow" data-name="mango" style="position: relative;">
          <img src="../../imagens/img_fruits/img_manga.jpg" class="card-img-top" alt="Manga" onclick="playAudio('mango')">
          <div class="card-body">
            <h5 class="card-title">Mango</h5>
            <div class="star-bar">
              <span class="star">★</span>
              <span class="star">★</span>
              <span class="star">★</span>
            </div>
            <audio id="mangoAudio">
              <source src="../../audios/audios_fruits/audio_mango.mp3" type="audio/mp3">
            </audio>
          </div>

          <button class="arrow-button" style="left: 5px;" id="arrow-left-mango" onclick="prevSlide()">
            <i class="bi bi-arrow-left-circle-fill"></i>
          </button>
          <button class="arrow-button" style="right: 5px;" id="arrow-mango" onclick="nextSlide()">
            <i class="bi bi-arrow-right-circle-fill"></i>
          </button>
        </div>
      </div>

            <div class="carousel-item">
        <div class="card text-center shadow" data-name="orange" style="position: relative;">
          <img src="../../imagens/img_fruits/img_laranja.jpg" class="card-img-top" alt="Laranja" onclick="playAudio('orange')">
          <div class="card-body">
            <h5 class="card-title">Orange</h5>
            <div class="star-bar">
              <span class="star">★</span>
              <span class="star">★</span>
              <span class="star">★</span>
            </div>
            <audio id="orangeAudio">
              <source src="../../audios/audios_fruits/audio_laranja.mp3" type="audio/mp3">
            </audio>
          </div>

          <button class="arrow-button" style="left: 5px;" id="arrow-left-orange" onclick="prevSlide()">
            <i class="bi bi-arrow-left-circle-fill"></i>
          </button>
          <button class="arrow-button" style="right: 5px;" id="arrow-orange" onclick="nextSlide()">
            <i class="bi bi-arrow-right-circle-fill"></i>
          </button>
        </div>
      </div>

            <div class="carousel-item">
        <div class="card text-center shadow" data-name="strawberry" style="position: relative;">
          <img src="../../imagens/img_fruits/img_strawberry.jpg" class="card-img-top" alt="Morango" onclick="playAudio('strawberry')">
          <div class="card-body">
            <h5 class="card-title">Strawberry</h5>
            <div class="star-bar">
              <span class="star">★</span>
              <span class="star">★</span>
              <span class="star">★</span>
            </div>
            <audio id="strawberryAudio">
              <source src="../../audios/audios_fruits/audio_strawberry.mp3" type="audio/mp3">
            </audio>
          </div>

                    <button class="arrow-button" style="left: 5px;" id="arrow-left-strawberry" onclick="prevSlide()">
            <i class="bi bi-arrow-left-circle-fill"></i>
          </button>
          <button class="arrow-button" style="right: 5px;" id="arrow-strawberry" onclick="nextSlide()">
            <i class="bi bi-arrow-right-circle-fill"></i>
          </button>
        </div>
      </div>

      <div class="carousel-item">
  <div class="card text-center shadow" style="background-color: #fff0fb;">
    <div class="card-body">
      <h1 class="mb-3">🎉 Parabéns! 🎉</h1>
      <p class="lead mb-4">Você aprendeu as frutas!</p>

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
  const allSlides = ['banana', 'apple', 'mango', 'orange', 'strawberry', 'parabens'];

  let clickCounters = {
    banana: 0,
    apple: 0,
    mango: 0,
    orange: 0,
    strawberry: 0
  };

  const visitedSlides = new Set(['banana']); 

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

      const todosCompletos = allSlides.slice(0, 5).every(fruit => visitedSlides.has(fruit));
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
    if (fruitsBtn) {
      fruitsBtn.style.display = isLastSlide ? 'none' : 'inline-block';
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
    const headerAudio = document.getElementById("fruitsAudio");
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