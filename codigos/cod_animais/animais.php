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
</head>

<body>
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
  </style>

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

  <!-- Carrossel sem rotação automática -->
  <div id="carouselExampleControls" class="carousel slide">
    <div class="carousel-inner">

      <div class="carousel-item active">
        <div class="card text-center shadow" data-name="cat">
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
        <div class="card text-center shadow" data-name="dog">
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
          <button class="custom-arrow" id="arrow-dog" onclick="nextSlide()">
            <i class="bi bi-arrow-right-circle-fill"></i>
          </button>
        </div>
      </div>

      <div class="carousel-item">
        <div class="card text-center shadow" data-name="cow">
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
          <button class="custom-arrow" id="arrow-cow" onclick="nextSlide()">
            <i class="bi bi-arrow-right-circle-fill"></i>
          </button>
        </div>
      </div>

      <div class="carousel-item">
        <div class="card text-center shadow" data-name="lion">
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
          <button class="custom-arrow" id="arrow-lion" onclick="nextSlide()">
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
    const clickCounters = {
      cat: 0,
      dog: 0,
      cow: 0,
      lion: 0
    };

    function playAudio(nome) {
      const audio = document.getElementById(nome + 'Audio');
      if (audio) audio.play();

      clickCounters[nome]++;
      updateStars(nome, clickCounters[nome]);

      if (clickCounters[nome] === 3) {
        setTimeout(() => {
          const seta = document.getElementById("arrow-" + nome);
          if (seta) seta.style.display = "flex";

          const arrowSound = document.getElementById("arrowSound");
          if (arrowSound) arrowSound.play();
        }, 870);
      }
    }

    function updateStars(nome, count) {
      const stars = document.querySelectorAll(`.card[data-name="${nome}"] .star`);
      stars.forEach((star, index) => {
        if (index < count) {
          star.classList.add("filled");
        } else {
          star.classList.remove("filled");
        }
      });
    }

    function nextSlide() {
      const carouselEl = document.querySelector('#carouselExampleControls');
      const carouselInstance = bootstrap.Carousel.getInstance(carouselEl)
        || new bootstrap.Carousel(carouselEl);
      carouselInstance.next();
    }

    const carouselEl = document.querySelector('#carouselExampleControls');
    carouselEl.addEventListener('slid.bs.carousel', () => {
      document.querySelectorAll('.custom-arrow').forEach(seta => {
        seta.style.display = 'none';
      });

      for (const key in clickCounters) {
        clickCounters[key] = 0;
        updateStars(key, 0);
      }
    });

    function playHeaderAudio() {
      const headerAudio = document.getElementById("animalsAudio");
      if (headerAudio) headerAudio.play();
    }
  </script>
</body>
</html>
