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

      <div class="wrap"><a class="btn-secondary" href="pizzen-bacio.php">mehr erfahren</a></div>
    </div>
  </header>

  <!-- social icons -->
  <?php include('group-social.php') ?>

  <main>

    <!-- werte  -->
    <section class="container info-about-container d-flex justify-content-center">
      <div class="container about-container mt-section">
        <div class="about-center">
          <div class="about-img">
            <img class="w-100" src="imgs/illustrations-svg/logo-claim.png" alt="bacio logo claim">
          </div>

          <h2 class="about-h1 mt-h-t">was macht bacio <br><span class="titel-h1">besonders?</span></h2>

          <img class="arrow arrow-topleft" src="imgs/illustrations-svg/arrow-topleft.svg" alt="">
          <img class="arrow arrow-bottomleft" src="imgs/illustrations-svg/arrow-bottomleft.svg" alt="">
          <img class="arrow arrow-topright" src="imgs/illustrations-svg/arrow-topright.svg" alt="">
          <img class="arrow arrow-bottomright" src="imgs/illustrations-svg/arrow-bottomright.svg" alt="">
        </div>

        <div class="feature about-topleft">
          <h2 class="about-h2 mb-3">hat Pure liebe für die
            italienische küche</h2>
        </div>

        <div class="feature about-bottomleft">
          <h2 class="about-h2 mb-3">legt besonders wert
            auf die natur und Umwelt</h2>
        </div>

        <div class="feature about-topright">
          <h2 class="about-h2 mb-3">garantiert höchste
            Qualität aller zutaten</h2>
        </div>

        <div class="feature about-bottomright">
          <h2 class="about-h2 mb-3">bereitet Jeder Teigboden &
            zutaten von Hand vor</h2>
        </div>
      </div>
    </section>

    <!-- intro section -->
    <section class="">
      <div class="container">
        <div class="intro-container">
          
          <img src="imgs/bacio-logo.png" alt="bacio-logo" height="50px">

          <div class="text-wrap">
            <p class="mt-h-t"><span class="font-highlight">BACIO</span> ist eine Marke, die traditionelle italienische
              Küche und höchste Qualität vereint. Unsere handgemachten Pizzas bringen den authentischen Geschmack
              Italiens direkt zu dir nach Hause. Die beste Tiefkühlpizza, die <span class="font-highlight">so guuuut & authentisch wie im BACIO
              Restaurant schmeckt!</span>  Glaubst du nicht? Dann schau dir unten an oder...</p>
          </div>

          <div class="wrap"><a class="btn-secondary" href="ueber-bacio.php">weiter lesen</a></div>
        </div>

        <div class="video-container mt-h-t">
          <div class="video">
            <video class="w-100" controls>
              <source src="videos/pizza.mp4" type="video/mp4">
              <source src="movie.ogg" type="video/ogg">
            </video>
          </div>

          <img class="design-element header-item-right"  src="imgs/illustrations-svg/tomate-green.svg"
            alt="frische Tomaten">
          <img class="design-element header-item-left" src="imgs/illustrations-svg/basilikum-green.svg"
            alt="frische Basilikum">
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
              <div class="wrap wrap-card mt-h-t"><a class="btn-main" href="pizzen-bacio.php">weiter lesen</a></div>
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
              <div class="wrap wrap-card mt-h-t"><a class="btn-main" href="pizzen-bacio.php">weiter lesen</a></div>
            </div>
          </div>

          <div class="col-lg-4 main-card">
            <img class="w-75 img-card" src="imgs/margherita.png" alt="" class="w-100">

            <div class="detail-container">
              <h3 class="titel-h3-v2">
                pizza prosciutto e funghi
              </h3>
              <p class="mt-h-t mb-0">Frische Pilze und Hinterschinken spielt in Sachen Geschmack ganz vorne mit.</p>
              <div class="wrap wrap-card mt-h-t"><a class="btn-main" href="pizzen-bacio.php">weiter lesen</a></div>
            </div>
          </div>

        </div>
      </div>
    </section>
  </main>

  <?php include('footer.php') ?>
</body>

</html>