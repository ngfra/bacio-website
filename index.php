<?php include('head.php'); ?>

<title>BACIO | Home </title>
</head>

<body>
  <!-- navigation -->
  <?php include('nav.php')?>

  <!-- header -->
  <header>
    <div class="container header-container">
      <img class="w-100 mt-section" src="imgs/margherita-header.png" alt="bacio pizza - pure Liebe ">
      <h1 class="titel-h1 mt-h-t text-center">BACiO, pure Liebe in jeder Pizza</h1>
      <p class="font-header">Lust auf Pizza? Hier bist du richtig! Traditionelle italienische Handwerkskunst und beste
        Zutaten – für den Geschmack Italiens zu Hause.</p>

      <div class="wrap"><a class="btn-main" href="pizzas.php">mehr erfahren</a></div>
    </div>
  </header>

  <!-- social icons -->
  <div class="group-social ">
    <aside class="d-flex flex-column gap-2">
      <a target="_blank" href="https://www.facebook.com/profile.php?id=61560862052310"><img height="45px"
          src="imgs/illustrations-svg/facebook-icon.svg" alt="instagram"></a>
      <a target="_blank" href="https://www.instagram.com/bacio.pizza/"><img height="45px"
          src="imgs/illustrations-svg/insta-icon.svg" alt="instagram"></a>
    </aside>
  </div>

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
          
        </div>

      </div>
    </section>
  </main>
</body>

</html>