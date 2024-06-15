<?php include('head.php'); ?>
<script src="js/bootstrap.min.js" defer></script>
<title>BACIO | Home </title>
</head>

<body>
  <!-- navigation -->
  <?php include('nav.php')?>

  <!-- header -->
  <header>
    <div class="container header-container">
      <img class="w-100 mt-h-t" src="imgs/margherita-header.png" alt="bacio pizza - pure Liebe ">
      <h1 class="titel-h1 mt-h-t text-center">BACiO, pure Liebe in jeder Pizza</h1>
      <p class="font-header">Lust auf Pizza? Hier bist du richtig! Traditionelle italienische Handwerkskunst und beste
        Zutaten – für den Geschmack Italiens zu Hause.</p>

      <div class="wrap"><a class="btn-main" href="pizzas.php">mehr erfahren</a></div>
    </div>
  </header>

  <!-- social icons -->
  <?php include('group-social.php') ?>

  <main>
    <!-- intro section -->
    <section class="mt-section">
      <div class="container">
        <div class="intro-container mt-section">
          <img class=" intro-rand" src="imgs/illustrations-svg/intro-rand.svg" alt="">
          <img src="imgs/bacio-logo.png" alt="bacio-logo" height="50px">

          <div class="text-wrap">
            <p class="mt-h-t"><span class="font-highlight">BACIO</span> ist eine Marke, die traditionelle italienische
              Küche und höchste Qualität vereint. Unsere handgemachten Pizzas bringen den authentischen Geschmack
              Italiens direkt zu dir nach Hause. Die beste Tiefkühlpizza, die so guuuut & authentisch wie im BACIO
              Restaurant schmeckt! Glaubst du nicht? Dann schau dir unten an oder...</p>
          </div>

          <div class="wrap"><a class="btn-main" href="about.php">weiter lesen</a></div>
        </div>

        <div class="video-container mt-h-t">
          <div class="video">
            <video class="w-100" controls>
              <source src="videos/pizza.mp4" type="video/mp4">
              <source src="movie.ogg" type="video/ogg">

            </video>
          </div>

          <img class="header-item-right" width="200px" src="imgs/illustrations-svg/tomate-green.svg" alt="frische Tomaten">
          <img class="header-item-left" width="150px" src="imgs/illustrations-svg/basilikum-green.svg" alt="frische Basilikum">
        </div>

      </div>
    </section>

    <!-- bestseller -->
    <section class="mt-section">
      <div class="container">
        <h2 class="titel-h2 m-0">unser best seller</h2>
        <p class="col-md-8 mt-h-t">Unsere Bestseller - die beliebtesten BACIO-Pizzen, die durch <span
            class="font-highlight">authentischen Geschmack und höchsten Qualität</span> überzeugen. Probiere unsere
          Favoriten und erlebe die Liebe zum Detail in jedem Biss!</p>
      </div>

      <div class="container mt-50">
        <div class="row">
          <div class="col-lg-4 ">
            <img class="w-75 img-card" src="imgs/margherita.png" alt="" class="w-100">

            <div class="detail-container">
              <h3 class="titel-h3-v2">
                pizza margherita
              </h3>
              <p class="mt-h-t mb-0">Die Mutter aller Pizzen, krusprig dünner Teig mit sonnengereifte Tomaten und
                feinster Mozzarella.</p>
              <div class="wrap wrap-card mt-h-t"><a class="btn-main" href="pizzas.php">weiter lesen</a></div>
            </div>
          </div>

          <div class="col-lg-4 main-card">
            <img class="w-75 img-card" src="imgs/pizza-salami.png" alt="" class="w-100">

            <div class="detail-container">
              <h3 class="titel-h3-v2">
                pizza salame
              </h3>
              <p class="mt-h-t mb-0">Hier geht’s um die Wurst - 100% reine Rindersalami.Ein herzhaftes
                Geschmackserlebnis, das jeden Bissen unvergesslich macht.</p>
              <div class="wrap wrap-card mt-h-t"><a class="btn-main" href="pizzas.php">weiter lesen</a></div>
            </div>
          </div>

          <div class="col-lg-4 main-card">
            <img class="w-75 img-card" src="imgs/margherita.png" alt="" class="w-100">

            <div class="detail-container">
              <h3 class="titel-h3-v2">
                pizza prosciutto e funghi
              </h3>
              <p class="mt-h-t mb-0">Frische Pilze und Hinterschinken spielt in Sachen Geschmack ganz vorne mit.</p>
              <div class="wrap wrap-card mt-h-t"><a class="btn-main" href="pizzas.php">weiter lesen</a></div>
            </div>
          </div>

        </div>
      </div>
    </section>
  </main>

  <?php include('footer.php') ?>
</body>

</html>