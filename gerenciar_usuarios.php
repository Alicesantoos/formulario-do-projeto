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
  <title>Meu Primeiro Inglês-Animais</title>
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
  
    .custom-arrow, .custom-arrow-left {
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
    .custom-arrow {
      right: 5px;
    }
    .custom-arrow-left {
      left: 5px;
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

  </style>
</head>

<body>
  <header class="cabecalho">
    <a href="../../index.php" class="btn btn-topo">
      <h1 class="bi bi-arrow-left-circle-fill" style="font-size: 1.3rem;">Voltar</h1> 
    </a>
  </header> 

  <header class="text-center p-2" style="background-color: #c40af3;">
    <button class="custom-btn" onclick="playHeaderAudio()">Animals</button>
    <audio id="animalsAudio">
      <source src="../../audios/audios_animais/animals.mp3" type="audio/mp3">
    </audio>
  </header>

  <div id="carouselExampleControls" class="carousel slide" data-bs-interval="false">
    <div class="carousel-inner">

      <div class="carousel-item active">
        <div class="card text-center shadow" data-name="cat" style="position: relative;">
          <img src="../../imagens/img_animals/cat.jpg" class="card-img-top" alt="Gato" onclick="playAudio('cat')">
          <div class="card-body">
            <h5 class="card-title">Cat</h5>
            <div class="star-bar">
              <span class="star">★</span>
              <span class="star">★</span>
              <span class="star">★</span>
            </div>
            <audio id="catAudio">
              <source src="../../audios/audios_animais/cat.mp3" type="audio/mp3">
            </audio>
          </div>

          <button class="custom-arrow" id="arrow-cat" onclick="nextSlide()">
            <i class="bi bi-arrow-right-circle-fill"></i>
          </button>
        </div>
      </div>

      <div class="carousel-item">
        <div class="card text-center shadow" data-name="dog" style="position: relative;">
          <img src="../../imagens/img_animals/dog.avif" class="card-img-top" alt="Cachorro" onclick="playAudio('dog')">
          <div class="card-body">
            <h5 class="card-title">Dog</h5>
            <div class="star-bar">
              <span class="star">★</span>
              <span class="star">★</span>
              <span class="star">★</span>
            </div>
            <audio id="dogAudio">
              <source src="../../audios/audios_animais/dog.mp3" type="audio/mp3">
            </audio>
          </div>
          
          <button class="custom-arrow-left" id="arrow-left-dog" onclick="prevSlide()">
            <i class="bi bi-arrow-left-circle-fill"></i>
          </button>
          
          <button class="custom-arrow" id="arrow-dog" onclick="nextSlide()">
            <i class="bi bi-arrow-right-circle-fill"></i>
          </button>
        </div>
      </div>

      <div class="carousel-item">
        <div class="card text-center shadow" data-name="cow" style="position: relative;">
          <img src="../../imagens/img_animals/img_vaca.png" class="card-img-top" alt="Vaca" onclick="playAudio('cow')">
          <div class="card-body">
            <h5 class="card-title">Cow</h5>
            <div class="star-bar">
              <span class="star">★</span>
              <span class="star">★</span>
              <span class="star">★</span>
            </div>
            <audio id="cowAudio">
              <source src="../../audios/audios_animais/cow.mp3" type="audio/mp3">
            </audio>
          </div>
          
          <button class="custom-arrow-left" id="arrow-left-cow" onclick="prevSlide()">
            <i class="bi bi-arrow-left-circle-fill"></i>
          </button>

          <button class="custom-arrow" id="arrow-cow" onclick="nextSlide()">
            <i class="bi bi-arrow-right-circle-fill"></i>
          </button>
        </div>
      </div>

      <div class="carousel-item">
        <div class="card text-center shadow" data-name="lion" style="position: relative;">
          <img src="../../imagens/img_animals/lion.jpg" class="card-img-top" alt="Leão" onclick="playAudio('lion')">
          <div class="card-body">
            <h5 class="card-title">Lion</h5>
            <div class="star-bar">
              <span class="star">★</span>
              <span class="star">★</span>
              <span class="star">★</span>
            </div>
            <audio id="lionAudio">
              <source src="../../audios/audios_animais/lion.mp3" type="audio/mp3">
            </audio>
          </div>

          <button class="custom-arrow-left" id="arrow-left-lion" onclick="prevSlide()">
            <i class="bi bi-arrow-left-circle-fill"></i>
          </button>

          <button class="custom-arrow" id="arrow-lion" onclick="nextSlide()">
            <i class="bi bi-arrow-right-circle-fill"></i>
          </button>
        </div>
      </div>

      <div class="carousel-item">
        <div class="card text-center shadow" data-name="fish" style="position: relative;">
          <img src="../../imagens/img_animals/img_fish.jpg" class="card-img-top" alt="Peixe" onclick="playAudio('fish')">
          <div class="card-body">
            <h5 class="card-title">Fish</h5>
            <div class="star-bar">
              <span class="star">★</span>
              <span class="star">★</span>
              <span class="star">★</span>
            </div>
            <audio id="fishAudio">
              <source src="../../audios/audios_animais/audio_fish.mp3" type="audio/mp3">
            </audio>
          </div>

          <button class="custom-arrow-left" id="arrow-left-fish" onclick="prevSlide()">
            <i class="bi bi-arrow-left-circle-fill"></i>
          </button>
          
          <button class="custom-arrow" id="arrow-fish" onclick="nextSlide()">
            <i class="bi bi-arrow-right-circle-fill"></i>
          </button>
        </div>
      </div>

      <!-- Slide de Parabéns corrigido e DENTRO do carousel-inner -->
      <div class="carousel-item">
        <div class="card text-center shadow" style="background-color: #fff0fb;">
          <div class="card-body">
            <h1 class="mb-4">Parabéns! 🎉</h1>
            <p class="mb-4">Você completou todos os animais! Estoure os balões para comemorar!</p>

            <div class="balloons d-flex justify-content-center flex-wrap gap-3">
              <div class="balloon" onclick="popBalloon(this)"></div>
              <div class="balloon" onclick="popBalloon(this)"></div>
              <div class="balloon" onclick="popBalloon(this)"></div>
              <div class="balloon" onclick="popBalloon(this)"></div>
              <div class="balloon" onclick="popBalloon(this)"></div>
            </div>

            <audio id="popSound">
              <source src="../../audios/audios_animais/pop.mp3" type="audio/mp3">
            </audio>
          </div>
        </div>
      </div>
    </div> <!-- Fim do carousel-inner -->
  </div> <!-- Fim do carousel completo -->


  <audio id="arrowSound">
    <source src="../../audios/audios_animais/seta_som.mp3" type="audio/mp3">
  </audio>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
  const allSlides = ['cat', 'dog', 'cow', 'lion', 'fish'];
  
  let clickCounters = {
    cat: 0,
    dog: 0,
    cow: 0,
    lion: 0,
    fish: 0
  };
  
  const visitedSlides = new Set(['cat']); 
  
  function playAudio(nome) {
    const audio = document.getElementById(nome + 'Audio');
    if (audio) audio.play();

    clickCounters[nome]++;

    updateStars(nome, Math.min(clickCounters[nome], 3));

    if (clickCounters[nome] === 3) {
      const index = allSlides.indexOf(nome);

      visitedSlides.add(nome);

      if (index < allSlides.length - 1) {
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
    const activeCard = document.querySelector('.carousel-item.active .card');
    if (!activeCard) return;

    const currentName = activeCard.getAttribute('data-name');

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
    const headerAudio = document.getElementById("animalsAudio");
    if (headerAudio) headerAudio.play();
  }

  window.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('.custom-arrow, .custom-arrow-left').forEach(seta => {
      seta.style.display = 'none';
    });
  });
</script>

</body>
</html>




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
  <title>Meu Primeiro Inglês - Animais</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!-- Estilos e fontes -->
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
  background-color: #ff69b4;
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
    <button id="headerButton" class="custom-btn" onclick="playHeaderAudio()">Animals</button>
    <audio id="animalsAudio">
      <source src="../../audios/audios_animais/animals.mp3" type="audio/mp3">
      <audio id="congratsAudio">
     <source src="../../audios/audios_congratolations/audio_congrats.mp3" type="audio/mp3">
    </audio>
    </audio>
  </header>

  <div id="carouselExampleControls" class="carousel slide" data-bs-interval="false">
    <div class="carousel-inner">

      <!-- Exemplo com slide de gato -->
      <div class="carousel-item active">
        <div class="card text-center shadow" data-name="cat" style="position: relative;">
          <img src="../../imagens/img_animals/cat.jpg" class="card-img-top" alt="Gato" onclick="playAudio('cat')">
          <div class="card-body">
            <h5 class="card-title">Cat</h5>
            <div class="star-bar">
              <span class="star">★</span>
              <span class="star">★</span>
              <span class="star">★</span>
            </div>
            <audio id="catAudio">
              <source src="../../audios/audios_animais/cat.mp3" type="audio/mp3">
            </audio>
          </div>
          <button class="arrow-button" style="right: 5px;" id="arrow-cat" onclick="nextSlide()">
            <i class="bi bi-arrow-right-circle-fill"></i>
          </button>
        </div>
      </div>

      <!-- Slide de dog -->
      <div class="carousel-item">
        <div class="card text-center shadow" data-name="dog" style="position: relative;">
          <img src="../../imagens/img_animals/dog.avif" class="card-img-top" alt="Cachorro" onclick="playAudio('dog')">
          <div class="card-body">
            <h5 class="card-title">Dog</h5>
            <div class="star-bar">
              <span class="star">★</span>
              <span class="star">★</span>
              <span class="star">★</span>
            </div>
            <audio id="dogAudio">
              <source src="../../audios/audios_animais/dog.mp3" type="audio/mp3">
            </audio>
          </div>

          <button class="arrow-button" style="left: 5px;" id="arrow-left-dog" onclick="prevSlide()">
            <i class="bi bi-arrow-left-circle-fill"></i>
          </button>
          <button class="arrow-button" style="right: 5px;" id="arrow-dog" onclick="nextSlide()">
            <i class="bi bi-arrow-right-circle-fill"></i>
          </button>
        </div>
      </div>

            <div class="carousel-item">
        <div class="card text-center shadow" data-name="cow" style="position: relative;">
          <img src="../../imagens/img_animals/img_vaca.png" class="card-img-top" alt="Vaca" onclick="playAudio('cow')">
          <div class="card-body">
            <h5 class="card-title">Cow</h5>
            <div class="star-bar">
              <span class="star">★</span>
              <span class="star">★</span>
              <span class="star">★</span>
            </div>
            <audio id="cowAudio">
              <source src="../../audios/audios_animais/cow.mp3" type="audio/mp3">
            </audio>
          </div>

          <button class="arrow-button" style="left: 5px;" id="arrow-left-cow" onclick="prevSlide()">
            <i class="bi bi-arrow-left-circle-fill"></i>
          </button>
          <button class="arrow-button" style="right: 5px;" id="arrow-cow" onclick="nextSlide()">
            <i class="bi bi-arrow-right-circle-fill"></i>
          </button>
        </div>
      </div>

            <div class="carousel-item">
        <div class="card text-center shadow" data-name="lion" style="position: relative;">
          <img src="../../imagens/img_animals/lion.jpg" class="card-img-top" alt="Leão" onclick="playAudio('lion')">
          <div class="card-body">
            <h5 class="card-title">Lion</h5>
            <div class="star-bar">
              <span class="star">★</span>
              <span class="star">★</span>
              <span class="star">★</span>
            </div>
            <audio id="lionAudio">
              <source src="../../audios/audios_animais/lion.mp3" type="audio/mp3">
            </audio>
          </div>

          <button class="arrow-button" style="left: 5px;" id="arrow-left-lion" onclick="prevSlide()">
            <i class="bi bi-arrow-left-circle-fill"></i>
          </button>
          <button class="arrow-button" style="right: 5px;" id="arrow-lion" onclick="nextSlide()">
            <i class="bi bi-arrow-right-circle-fill"></i>
          </button>
        </div>
      </div>

            <div class="carousel-item">
        <div class="card text-center shadow" data-name="fish" style="position: relative;">
          <img src="../../imagens/img_animals/img_fish.jpg" class="card-img-top" alt="Peixe" onclick="playAudio('fish')">
          <div class="card-body">
            <h5 class="card-title">Fish</h5>
            <div class="star-bar">
              <span class="star">★</span>
              <span class="star">★</span>
              <span class="star">★</span>
            </div>
            <audio id="fishAudio">
              <source src="../../audios/audios_animais/audio_fish.mp3" type="audio/mp3">
            </audio>
          </div>

                    <button class="arrow-button" style="left: 5px;" id="arrow-left-fish" onclick="prevSlide()">
            <i class="bi bi-arrow-left-circle-fill"></i>
          </button>
          <button class="arrow-button" style="right: 5px;" id="arrow-fish" onclick="nextSlide()">
            <i class="bi bi-arrow-right-circle-fill"></i>
          </button>
        </div>
      </div>

      <div class="carousel-item">
  <div class="card text-center shadow" style="background-color: #fff0fb;">
    <div class="card-body">
      <h1 class="mb-3">🎉 Parabéns! 🎉</h1>
      <p class="lead mb-4">Você aprendeu os animais! Continue assim! 🐾</p>

      <!-- Troféu -->
      <img src="../../imagens/trofeú.webp" alt="Troféu" style="width: 150px;" class="mb-3">

      <!-- Balões -->
      <div class="balloons d-flex justify-content-center flex-wrap gap-3 mb-4">
        <div class="balloon" onclick="popBalloon(this)"></div>
        <div class="balloon" onclick="popBalloon(this)"></div>
        <div class="balloon" onclick="popBalloon(this)"></div>
        <div class="balloon" onclick="popBalloon(this)"></div>
        <div class="balloon" onclick="popBalloon(this)"></div>
      </div>

      <!-- Botões -->
      <a href="../../index.php" class="btn btn-success m-1">
        <h4 class="bi bi-house-door-fill"> Aprender mais conteúdos</h4> 
      </a>

      <!-- Áudio de parabéns -->
      <audio id="parabensAudio" autoplay>
        <source src="../../audios/audios_congratolations/audio_alegria.mp3" type="audio/mp3">
      </audio>

      <!-- Som de estouro de balão -->
      <audio id="popSound">
        <source src="../../audios/audios_congratolations/pop_audio.mp3" type="audio/mp3">
      </audio>
    </div>
  </div>
</div>

  <!-- Áudio do som das setas -->
  <audio id="arrowSound">
    <source src="../../audios/audios_animais/seta_som.mp3" type="audio/mp3">
  </audio>

  <!-- Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script>
  const allSlides = ['cat', 'dog', 'cow', 'lion', 'fish', 'parabens'];

  let clickCounters = {
    cat: 0,
    dog: 0,
    cow: 0,
    lion: 0,
    fish: 0
  };

  const visitedSlides = new Set(['cat']); 

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

      // Avança para parabéns se todos os animais estiverem completos
      const todosCompletos = allSlides.slice(0, 5).every(animal => visitedSlides.has(animal));
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
    const headerAudio = document.getElementById("animalsAudio");
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

carouselEl.addEventListener('slid.bs.carousel', () => {
  const activeItem = document.querySelector('.carousel-item.active');
  const headerButton = document.getElementById('headerButton');

  // Se estiver no último slide (parabéns), altera o botão
  if (activeItem && activeItem.innerHTML.includes('🎉 Parabéns! 🎉')) {
    headerButton.textContent = '🎉 Congratulations!';
  } else {
    headerButton.textContent = 'Animals';
  }

  // ... (restante do código já presente dentro deste event listener)
  const activeCard = activeItem.querySelector('.card');
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
</script>

</body>
</html>
