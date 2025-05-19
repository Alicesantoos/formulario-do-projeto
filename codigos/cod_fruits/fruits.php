<!DOCTYPE html> 
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Fruits</title>
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
    <button class="custom-btn" onclick="playHeaderAudio()">Fruits</button>
    <audio id="fruitsAudio">
      <source src="../../audios/audios_fruits/audio_fruits.mp3" type="audio/mp3">
    </audio>
  </header>


  <div id="carouselExampleControls" class="carousel slide" data-bs-interval="false">
    <div class="carousel-inner">

      <div class="carousel-item active">
        <div class="card text-center shadow" data-name="banana">
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
          <button class="custom-arrow" id="arrow-banana" onclick="nextSlide()" style="display: none;">
            <i class="bi bi-arrow-right-circle-fill"></i>
          </button>
        </div>
      </div>

      <div class="carousel-item">
        <div class="card text-center shadow" data-name="apple">
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
          <button class="custom-arrow" id="arrow-apple" onclick="nextSlide()" style="display: none;">
            <i class="bi bi-arrow-right-circle-fill"></i>
          </button>
        </div>
      </div>

      <div class="carousel-item">
        <div class="card text-center shadow" data-name="orange">
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
          <button class="custom-arrow" id="arrow-orange" onclick="nextSlide()" style="display: none;">
            <i class="bi bi-arrow-right-circle-fill"></i>
          </button>
        </div>
      </div>

      <div class="carousel-item">
        <div class="card text-center shadow" data-name="mango">
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
          <button class="custom-arrow" id="arrow-mango" onclick="nextSlide()" style="display: none;">
            <i class="bi bi-arrow-right-circle-fill"></i>
          </button>
        </div>
      </div>

            <div class="carousel-item">
        <div class="card text-center shadow" data-name="strawberry">
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
          <button class="custom-arrow" id="arrow-strawberry" onclick="nextSlide()" style="display: none;">
            <i class="bi bi-arrow-right-circle-fill"></i>
          </button>
        </div>
      </div>

    </div>
  </div>

  <audio id="arrowSound">
    <source src="../../audios/audios_fruits/seta_som.mp3" type="audio/mp3">
  </audio>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <script>
    const clickCounters = {
      banana: 0,
      apple: 0,
      orange: 0,
      mango: 0,
      strawberry: 0
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
      const headerAudio = document.getElementById("fruitsAudio");
      if (headerAudio) headerAudio.play();
    }
  </script>
</body>
</html>
