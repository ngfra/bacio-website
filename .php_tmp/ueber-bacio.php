<?php include('head.php'); ?>
<script src="js/bootstrap.min.js" defer></script>
<title>BACIO | Home </title>
</head>

<body>
  <!-- navigation -->
  <?php include('nav.php')?>

  <!-- header -->
  <header class="d-flex justify-content-center">
    <div class="container about-container mt-section">
      <div class="about-center">
        <div class="about-img">
          <img class="w-100" src="imgs/illustrations-svg/logo-claim.png" alt="bacio logo claim">
        </div>

        <h1 class="about-h1 mt-h-t">was macht bacio <br><span class="titel-h1">besonders?</span></h1>

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
  </header>

  <!-- social icons -->
  <?php include('group-social.php') ?>

  <main>
    <section class="container story-container mt-section">
      <h2 class="titel-h2">so beginnt unsere Geschichte</h2>


      <div class="story-line-container container">
        <img class="story-line " src="imgs/illustrations-svg/story-line.svg" alt="bacio storyline">

        <!-- 1 -->
        <div class="row d-flex align-items-center">
          <div class="col-md-4 story-img">
            <img width="150px" src="imgs/illustrations-svg/key-visuell.png" alt="so beginnt bacio geschichte">
          </div>

          <div class="col-md-8">
            <p class="mt-h-t">Mit <span class="font-highlight">Liebe und Leidenschaften</span>  für traditionelle italienische Küche haben Armando Ammirati und Andreas
              Schmid die Pizzeria BACIO 2015 in Innsbruck gegründet.</p>
          </div>
        </div>

        <!-- 2 -->
        <div class="row mt-50 d-flex align-items-center story-reverse">
          <div class="col-md-8">
            <p class="mt-h-t"><span class="font-highlight">Das Geheimnis</span> in der Rezeptur des Teiges, in der Qualität der Zutaten, und vor allem: die Liebe der
              Zubereitung erhält BACIO die beste Pizzeria der Stadt auf verschiedenen Plattformen.</p>
          </div>

          <div class="col-md-4 story-img">
            <img width="250px" src="imgs/illustrations-svg/story-line-2.svg" alt="">
          </div>
        </div>

        <!-- 3 -->
        <div class="row mt-50 d-flex align-items-center">
          <div class="col-md-4 d-flex justify-content-center">
            <img width="180px" src="imgs/illustrations-svg/Pizza-story.svg" alt="so beginnt bacio geschichte">
          </div>

          <div class="col-md-8">
            <p class="mt-h-t">Alles führt zu der Idee einer <span class="font-highlight">Tiefkühlpizza, die so gut und authentisch schmeckt</span> , dass man kaum glauben
              kann, dass es sich um Tiefkühlkost handelt.</p>
          </div>
        </div>

        <!-- 4 -->
        <div class="row mt-50 d-flex align-items-center story-reverse">
          <div class="col-md-8">
            <p class="mt-h-t"><span class="font-highlight">BACIO respektiert die Natur</span>, die Pizzakartons bestehen aus recycelten Materialien und die Take-away-Pizza wird stets auf Butterpapier gelegt, um den Karton nicht im Restmüll zu entsorgen.</p>
          </div>

          <div class="col-md-4 story-img">
            <img width="250px" src="imgs/illustrations-svg/story-line-4.svg" alt="">
          </div>
        </div>

        <!-- 5 -->
        <div class="row mt-50">

          <div class="offset-md-4 col-md-8">
            <p>BACIO glaubt daran, dass <span class="font-highlight">Qualität und Nachhaltigkeit Hand in Hand gehen. </span>Deshalb setzen wir auf sorgfältig ausgewählte, hochwertige Zutaten und handwerkliche Zubereitungsmethoden, um dich die beste Tiefkühlpizza zu bringen. <br> 
            Unsere Reise hat gerade erst begonnen und wird noch viele spannende Wege gehen!</p>

            <img  width="150px" src="imgs/illustrations-svg/logo-claim.png" alt="bacio logo claim">
          </div>
        </div>

      </div>
    </section>

  </main>

  <?php include('footer.php') ?>
</body>

</html>