<?php include('head.php'); ?>
<title>BACIO | Pizzen</title>

<body>
  <!-- navigation -->
  <?php include('nav.php')?>

  <header>
    <div class="container header-container">
      <h1 class="titel-h1 mt-section text-center">Authentische für jeden Geschmack</h1>
      <p class="font-header">Entdecke unsere Auswahl an handgemachten Pizzen, die mit besten Zutaten und traditioneller
        italienischer Handwerkskunst gefertigt werden. Für jeden Geschmack die perfekte Pizza.</p>
      <img  class="design-element header-item-right"  src="imgs/illustrations-svg/mushroom-green.svg" alt="frische Pilze">
      <img  class="design-element header-item-left"  src="imgs/illustrations-svg/basilikum-green.svg" alt="frische Pilze">

    </div>
  </header>

  <main class="main-container">
    <?php include('group-social.php')?>
    <img data-aos="fade-up"
    data-aos-duration="1000" width="200px" class="main-design-element de-01"  src="imgs/illustrations-svg/tomate-green.svg" alt="frische Pilze">

    <img data-aos="fade-down"
     data-aos-duration="1000" width="200px" class="main-design-element de-02"  src="imgs/illustrations-svg/pizza-slide.svg" alt="frische Pilze">
    <section class="mt-50">
      <div class="container">
        <!-- row 1 -->
        <div class="row">
          <!-- pizza margherita -->
          <div class="col-lg-4">
            <img class="w-75 img-card" src="imgs/margherita.png" alt="Pizza Margherita"
            title="Pizza Margherita">

            <div class="detail-container">
              <h3 class="titel-h3-v2">pizza margherita</h3>
              <p class="mt-h-t mb-0">Die Mutter aller Pizzen, krusprig dünner Teig mit sonnengereiften Tomaten und
                feinster Mozzarella.</p>
              <div class="wrap wrap-card mt-h-t">
                <a data-bs-toggle="modal" data-bs-target="#pizzaMargherita" class="btn-main" href="#">weiter lesen</a>
              </div>
            </div>
          </div>

          <!-- pizza salame -->
          <div class="col-lg-4 main-card">
            <img class="w-75 img-card" src="imgs/pizza-salami.png" alt="Pizza Salame"
            title="Pizza Salame">

            <div class="detail-container">
              <h3 class="titel-h3-v2">pizza salame</h3>
              <p class="mt-h-t mb-0">Hier geht’s um die Wurst - 100% reine Rindersalami.Jeder Biss unvergesslich macht.</p>
              <div class="wrap wrap-card mt-h-t"><a data-bs-toggle="modal" data-bs-target="#pizzaSalame"
                  class="btn-main" href="#">weiter lesen</a></div>
            </div>
          </div>

          <!-- pizza prosciutto e funghi -->
          <div class="col-lg-4 main-card">
            <img class="w-75 img-card" src="imgs/pizza-prosciutto-pilze.png" alt="Pizza Prosciutto e Funghi"
            title="Pizza Prosciutto e Funghi">

            <div class="detail-container">
              <h3 class="titel-h3-v2">pizza prosciutto e funghi</h3>
              <p class="mt-h-t mb-0">Frische Pilze und Hinterschinken spielen in Sachen Geschmack ganz vorne mit.</p>
              <div class="wrap wrap-card mt-h-t"><a data-bs-toggle="modal" data-bs-target="#pizzaProsciutto" class="btn-main" href="#">weiter lesen</a></div>
            </div>
          </div>
        </div>

        <!-- row 2 -->
        <div class="row mt-section">
          <!-- pizza PIZZA SPINACI E RICOTTA -->
          <div class="col-lg-4">
            <img class="w-75 img-card" src="imgs/margherita.png" alt="PIZZA SPINACI E RICOTTA" title="PIZZA SPINACI E RICOTTA ">

            <div class="detail-container">
              <h3 class="titel-h3-v2">PiZZA SPiNACi E RiCOTTA</h3>
              <p class="mt-h-t mb-0">Probier mal vegetastisch!Diese Pizza kommt mit frischem Ricotta und
              Babyspinat in ganzen Blättern.</p>
              <div class="wrap wrap-card mt-h-t">
                <a data-bs-toggle="modal" data-bs-target="#pizzaSpinaci" class="btn-main" href="#">weiter lesen</a>
              </div>
            </div>
          </div>

          <!-- PIZZA SALAME PICCANTE -->
          <div class="col-lg-4 main-card">
            <img class="w-75 img-card" src="imgs/pizza-salami.png" alt="Pizza Salame">

            <div class="detail-container">
              <h3 class="titel-h3-v2">PiZZA SALAME PiCCANTE</h3>
              <p class="mt-h-t mb-0">Spice to meet you! Ein feuriger Genuss mit ordentlich Geschmackes!</p>
              <div class="wrap wrap-card mt-h-t"><a data-bs-toggle="modal" data-bs-target="#pizzaPiccante"
                  class="btn-main" href="#">weiter lesen</a></div>
            </div>
          </div>

          <!-- PIZZA PROSCIUTTO E ANANAS -->
          <div class="col-lg-4 main-card">
            <img class="w-75 img-card" src="imgs/pizza-salami.png" alt="Pizza Prosciutto e Funghi">

            <div class="detail-container">
              <h3 class="titel-h3-v2">PiZZA PROSCiUTTO E ANANAS</h3>
              <p class="mt-h-t mb-0">Obst auf einer Pizza?! Dann sagen wir: Musst du nicht mögen. Wirst du aber lieben!</p>
              <div class="wrap wrap-card mt-h-t"><a data-bs-toggle="modal" data-bs-target="#pizzaAnanas" class="btn-main" href="#">weiter lesen</a></div>
            </div>
          </div>
        </div>
        
         <!-- row 3-->
         <div class="row mt-section">
          <!-- PIZZA TONNO E CIPOLLA -->
          <div class="col-lg-4">
            <img class="w-75 img-card" src="imgs/pizza thunfisch.png" alt="Pizza thunfisch"
            title="Pizza Thunfisch">

            <div class="detail-container">
              <h3 class="titel-h3-v2">PiZZA TONNO E CiPOLLA</h3>
              <p class="mt-h-t mb-0">Diese Sorte schmeckt auch dem Gewissen. Wer mag Fisch, dann hier bist du richtig!</p>
              <div class="wrap wrap-card mt-h-t">
                <a data-bs-toggle="modal" data-bs-target="#pizzaTonno" class="btn-main" href="#">weiter lesen</a>
              </div>
            </div>
          </div>

          <!-- PIZZA QUATTRO FORMAGGI -->
          <div class="col-lg-4 main-card">
            <img class="w-75 img-card" src="imgs/pizza-salami.png" alt="Pizza Salame">

            <div class="detail-container">
              <h3 class="titel-h3-v2">PiZZA QUATTRO FORMAGGi</h3>
              <p class="mt-h-t mb-0">Die Mischung von Mozzarella, Bergkäse, Cheddar und Blauschimmelkäse? Leeeeeker!</p>
              <div class="wrap wrap-card mt-h-t"><a data-bs-toggle="modal" data-bs-target="#pizzaQuattro"
                  class="btn-main" href="#">weiter lesen</a></div>
            </div>
          </div>

          <!-- PIZZA SOLO -->
          <div class="col-lg-4 main-card">
            <img class="w-75 img-card" src="imgs/pizzasolo.png" alt="Pizza solo"
            title="Pizza solo">

            <div class="detail-container">
              <h3 class="titel-h3-v2">PiZZA solo</h3>
              <p class="mt-h-t mb-0">Du kannst Pizza belegen, mit was immer du willst: mit Gemüse, Fisch, Fleisch,… was die sonst noch so in den Geschmackssinn kommt.</p>
              <div class="wrap wrap-card mt-h-t"><a data-bs-toggle="modal" data-bs-target="#pizzaSolo" class="btn-main" href="#">weiter lesen</a></div>
            </div>
          </div>
        </div>

        <?php include('modal.php') ?>
      </div>
    </section>
  </main>

  <?php include('footer.php') ?>
   <!-- Bootstrap JS -->
   <script src="js/bootstrap.bundle.min.js"></script>
  
</body>

</html>