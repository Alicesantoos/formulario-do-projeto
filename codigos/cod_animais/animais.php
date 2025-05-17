<!DOCTYPE html> 
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Animais</title>
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
    /* Estilo para as setas */
    .custom-arrow, .custom-arrow-left {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      font-size: 2.5rem;
      background: transparent;
      border: none;
      color: purple;
      cursor: pointer;
      z-index: 10;
      display: none; /* começam escondidas */
    }
    .custom-arrow {
      right: 5px;
    }
    .custom-arrow-left {
      left: 5px;
    }
  </style>
</head>

<body>

  <header class="cabecalho">
    <a href="../cod_visaogeral.php" class="btn btn-topo">
      <h1 class="bi bi-arrow-left-circle-fill" style="font-size: 1.3rem;">Voltar</h1> 
    </a>
  </header> 

  <header class="text-center p-2" style="background-color: #c40af3;">
    <button class="custom-btn" onclick="playHeaderAudio()">Animals</button>
    <audio id="animalsAudio">
      <source src="../../audios/audios_animais/animals.mp3" type="audio/mp3">
    </audio>
  </header>

  <!-- Carrossel sem avanço automático -->
  <div id="carouselExampleControls" class="carousel slide" data-bs-interval="false">
    <div class="carousel-inner">

      <!-- Slide Cat (primeiro) -->
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
          <!-- Botão seta esquerda NÃO existe no primeiro slide -->

          <!-- Botão seta direita -->
          <button class="custom-arrow" id="arrow-cat" onclick="nextSlide()">
            <i class="bi bi-arrow-right-circle-fill"></i>
          </button>
        </div>
      </div>

      <!-- Slide Dog -->
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
          <!-- Botão seta esquerda -->
          <button class="custom-arrow-left" id="arrow-left-dog" onclick="prevSlide()">
            <i class="bi bi-arrow-left-circle-fill"></i>
          </button>
          <!-- Botão seta direita -->
          <button class="custom-arrow" id="arrow-dog" onclick="nextSlide()">
            <i class="bi bi-arrow-right-circle-fill"></i>
          </button>
        </div>
      </div>

      <!-- Slide Cow -->
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
          <!-- Botão seta esquerda -->
          <button class="custom-arrow-left" id="arrow-left-cow" onclick="prevSlide()">
            <i class="bi bi-arrow-left-circle-fill"></i>
          </button>
          <!-- Botão seta direita -->
          <button class="custom-arrow" id="arrow-cow" onclick="nextSlide()">
            <i class="bi bi-arrow-right-circle-fill"></i>
          </button>
        </div>
      </div>

      <!-- Slide Lion -->
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
          <!-- Botão seta esquerda -->
          <button class="custom-arrow-left" id="arrow-left-lion" onclick="prevSlide()">
            <i class="bi bi-arrow-left-circle-fill"></i>
          </button>
          <!-- Botão seta direita -->
          <button class="custom-arrow" id="arrow-lion" onclick="nextSlide()">
            <i class="bi bi-arrow-right-circle-fill"></i>
          </button>
        </div>
      </div>

      <!-- Slide Fish -->
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
          <!-- Botão seta esquerda -->
          <button class="custom-arrow-left" id="arrow-left-fish" onclick="prevSlide()">
            <i class="bi bi-arrow-left-circle-fill"></i>
          </button>
          <!-- Botão seta direita -->
          <button class="custom-arrow" id="arrow-fish" onclick="nextSlide()">
            <i class="bi bi-arrow-right-circle-fill"></i>
          </button>
        </div>
      </div>

    </div>
  </div>

  <audio id="arrowSound">
    <source src="../../audios/audios_animais/seta_som.mp3" type="audio/mp3">
  </audio>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
  const allSlides = ['cat', 'dog', 'cow', 'lion', 'fish'];
  
  // Contador de cliques no áudio por slide
  let clickCounters = {
    cat: 0,
    dog: 0,
    cow: 0,
    lion: 0,
    fish: 0
  };
  
  // Guarda quais slides já foram visitados para mostrar seta esquerda
  const visitedSlides = new Set(['cat']); // primeiro slide ativo já visitado
  
  // Função que toca o áudio e conta cliques
  function playAudio(nome) {
    const audio = document.getElementById(nome + 'Audio');
    if (audio) audio.play();

    // Incrementa contador só do slide ativo
    clickCounters[nome]++;

    // Atualiza estrelas preenchidas de acordo com os cliques (max 3)
    updateStars(nome, Math.min(clickCounters[nome], 3));

    // Depois de 3 cliques, mostra as setas (se aplicável)
    if (clickCounters[nome] === 3) {
      const index = allSlides.indexOf(nome);

      // Marca slide atual como visitado
      visitedSlides.add(nome);

      // Mostrar seta direita se não for último slide
      if (index < allSlides.length - 1) {
        const setaDireita = document.getElementById("arrow-" + nome);
        if (setaDireita) setaDireita.style.display = "flex";
      }

      // Mostrar seta esquerda se não for o primeiro e o anterior já visitado
      if (index > 0) {
        const setaEsquerda = document.getElementById("arrow-left-" + nome);
        const prevSlide = allSlides[index - 1];
        if (visitedSlides.has(prevSlide)) {
          if (setaEsquerda) setaEsquerda.style.display = "flex";
        }
      }

      // Tocar som da seta
      const arrowSound = document.getElementById("arrowSound");
      if (arrowSound) arrowSound.play();
    }
  }

  // Atualiza as estrelas preenchidas para o slide
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

  // Função para ir para o próximo slide via Bootstrap Carousel
  function nextSlide() {
    const carouselEl = document.querySelector('#carouselExampleControls');
    const carouselInstance = bootstrap.Carousel.getInstance(carouselEl) || new bootstrap.Carousel(carouselEl);
    carouselInstance.next();
  }

  // Função para voltar para o slide anterior
  function prevSlide() {
    const carouselEl = document.querySelector('#carouselExampleControls');
    const carouselInstance = bootstrap.Carousel.getInstance(carouselEl) || new bootstrap.Carousel(carouselEl);
    carouselInstance.prev();
  }

  // Quando o carrossel troca de slide
  const carouselEl = document.querySelector('#carouselExampleControls');
  carouselEl.addEventListener('slid.bs.carousel', () => {
    // Pega slide ativo
    const activeCard = document.querySelector('.carousel-item.active .card');
    if (!activeCard) return;

    const currentName = activeCard.getAttribute('data-name');

    // Resetar contador só do slide ativo para 0 (o usuário vai precisar clicar 3 vezes de novo)
    clickCounters[currentName] = 0;

    // Esconder as setas do slide ativo
    const setaDireita = document.getElementById("arrow-" + currentName);
    const setaEsquerda = document.getElementById("arrow-left-" + currentName);
    if (setaDireita) setaDireita.style.display = "none";
    if (setaEsquerda) setaEsquerda.style.display = "none";

    // Mostrar seta esquerda se o slide anterior já foi visitado (e não for o primeiro)
    const index = allSlides.indexOf(currentName);
    if (index > 0) {
      const prevSlide = allSlides[index - 1];
      if (visitedSlides.has(prevSlide)) {
        if (setaEsquerda) setaEsquerda.style.display = "flex";
      }
    }
  });

  // Função para tocar áudio do header
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
