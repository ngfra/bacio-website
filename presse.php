<?php include('head.php'); ?>
<title>BACIO Presse</title>

<body>
  <!-- navigation -->
  <?php include('nav.php')?>

  <header>
    <div class="container header-container">
      <h1 class="titel-h1 mt-section text-center">BACiO in den Schlagzeilen</h1>
      <p class="font-header">Tauche ein in die Welt von BACIO und entdecke unsere spannende Reise durch die Medien.
        Erfahre mehr über unsere Leidenschaft, Tradition und Authentizität, die uns zu einer der beliebtesten
        Pizzamarken macht.</p>
      <img class="header-item-right" width="250px" src="imgs/illustrations-svg/tele.png" alt="Bacio werbespot">
    </div>
  </header>

  <main>
    <?php include('group-social.php')?>

    <section class="mt-50">
      <div class="container video-container ">
        <h2 class="titel-h3-v2">werbespot juni 2024 bacio - amore puro</h2>
      </div>
      <div class="container video-container mt-h-t">
        <div class="video">
          <video class="w-100" controls>
            <source src="videos/BACIO-amore-puro.mp4" type="video/mp4">
            <source src="movie.ogg" type="video/ogg">
          </video>
        </div>
      </div>
    </section>

    <section class="mt-50">
      <div class="container video-container ">
        <img width="50px" src="imgs/illustrations-svg/mircofon.png" alt="radiospot">
        <h2 class="titel-h3-v2">Radiospot juni 2024 bacio - amore puro</h2>
      </div>


      <div class="video-container">
        <audio controls>
          <source src="videos/Radiospot.mp3" type="audio/wav">
        </audio>
      </div>
    </section>
  </main>

  <?php include('footer.php') ?>
  <!-- Bootstrap JS -->
  <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>