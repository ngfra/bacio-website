<?php include('head.php'); ?>
<title>BACIO Pizzen</title>

<body>
  <!-- navigation -->
  <?php include('nav.php')?>

  <header>
    <div class="container header-container">
      <h1 class="titel-h1 mt-section text-center">Authentische für jeden Geschmack</h1>
      <p class="font-header">Entdecke unsere Auswahl an handgemachten Pizzen, die mit besten Zutaten und traditioneller
        italienischer Handwerkskunst gefertigt werden. Für jeden Geschmack die perfekte Pizza.</p>
      <img class="design-element header-item-right" src="imgs/illustrations-svg/mushroom-green.svg" alt="frische Pilze">
      <img class="design-element header-item-left" src="imgs/illustrations-svg/basilikum-green.svg" alt="frische Pilze">

    </div>
  </header>

  <main class="main-container">
    <?php include('group-social.php')?>
    <img data-aos="fade-up" data-aos-duration="1000" width="200px" class="main-design-element de-01"
      src="imgs/illustrations-svg/tomate-green.svg" alt="frische Pilze">

    <img data-aos="fade-down" data-aos-duration="1000" width="200px" class="main-design-element de-02"
      src="imgs/illustrations-svg/pizza-slide.svg" alt="frische Pilze">
    <section class="mt-50">
      <div class="container">
        <!-- row 1 -->
        <div class="row">
          <!-- pizza margherita -->
          <div class="col-lg-4">
            <img class="w-75 img-card" src="imgs/margherita.webp" alt="Pizza Margherita" title="Pizza Margherita">

            <div class="detail-container">
              <h2 class="titel-h3-v2">pizza margherita</h2>
              <p class="mt-h-t mb-0">Die Mutter aller Pizzen, krusprig dünner Teig mit sonnengereiften Tomaten und
                feinster Mozzarella... <a data-bs-toggle="modal" data-bs-target="#pizzaMargherita"
                  class="color-main text-decoration-none" href="#">Weiter lesen</a></p>
              <div class="wrap wrap-card mt-h-t ">
                <div class="btn-secondary bestellenButton">Bestellen</div>
              </div>
            </div>
          </div>

          <!-- pizza salame -->
          <div class="col-lg-4 main-card">
            <img class="w-75 img-card" src="imgs/pizza-salami.webp" alt="Pizza Salame" title="Pizza Salame">

            <div class="detail-container">
              <h2 class="titel-h3-v2">pizza salame</h2>
              <p class="mt-h-t mb-0">Hier geht’s um die Wurst - 100% reine Rindersalami. Jeder Biss unvergesslich
                macht...<a data-bs-toggle="modal" data-bs-target="#pizzaSalame" class="text-decoration-none color-main"
                  href="#">Weiter lesen</a>
              </p>
              <div class="wrap wrap-card mt-h-t ">
                <div class="btn-secondary bestellenButton">Bestellen</div>
              </div>
            </div>
          </div>

          <!-- pizza prosciutto e funghi -->
          <div class="col-lg-4 main-card">
            <img class="w-75 img-card" src="imgs/pizza-prosciutto-pilze.webp" alt="Pizza Prosciutto e Funghi"
              title="Pizza Prosciutto e Funghi">

            <div class="detail-container">
              <h2 class="titel-h3-v2">pizza prosciutto e funghi</h2>
              <p class="mt-h-t mb-0">Frische Pilze und Hinterschinken spielen in Sachen Geschmack ganz vorne mit... <a
                  data-bs-toggle="modal" data-bs-target="#pizzaProsciutto" class="text-decoration-none color-main"
                  href="#">Weiter lesen</a> </p>
              <div class="wrap wrap-card mt-h-t ">
                <div class="btn-secondary bestellenButton">Bestellen</div>
              </div>
            </div>
          </div>
        </div>

        <!-- row 2 -->
        <div class="row mt-section">
          <!-- pizza PIZZA SPINACI E RICOTTA -->
          <div class="col-lg-4">
            <img class="w-75 img-card" src="imgs/pizza-spinaci.webp" alt="Pizza Spinaci e ricotto"
              title="Pizza Spinaci e ricotto">

            <div class="detail-container">
              <h2 class="titel-h3-v2">PiZZA SPiNACi E RiCOTTA</h2>
              <p class="mt-h-t mb-0">Probier mal vegetastisch!Diese Pizza kommt mit frischem Ricotta und
                Babyspinat in ganzen Blättern... <a data-bs-toggle="modal" data-bs-target="#pizzaSpinaci"
                  class="text-decoration-none color-main" href="#">Weiter lesen</a></p>

              <div class="wrap wrap-card mt-h-t ">
                <div class="btn-secondary bestellenButton">Bestellen</div>
              </div>
            </div>
          </div>

          <!-- PIZZA SALAME PICCANTE -->
          <div class="col-lg-4 main-card">
            <img class="w-75 img-card" src="imgs/pizza-piccante.webp" alt="Pizza Piccante Salame"
              title="Pizza Piccante Salame">

            <div class="detail-container">
              <h2 class="titel-h3-v2">PiZZA SALAME PiCCANTE</h2>
              <p class="mt-h-t mb-0">Spice to meet you! Ein feuriger Genuss mit ordentlich Geschmackes... <a
                  data-bs-toggle="modal" data-bs-target="#pizzaPiccante" class="color-main text-decoration-none"
                  href="#">Weiter lesen</a></p>

              <div class="wrap wrap-card mt-h-t ">
                <div class="btn-secondary bestellenButton">Bestellen</div>
              </div>

            </div>
          </div>

          <!-- PIZZA PROSCIUTTO E ANANAS -->
          <div class="col-lg-4 main-card">
            <img class="w-75 img-card" src="imgs/pizza-ananas.webp" alt="Pizza Ananas" title="Pizza Ananas">

            <div class="detail-container">
              <h2 class="titel-h3-v2">PiZZA PROSCiUTTO E ANANAS</h2>
              <p class="mt-h-t mb-0">Obst auf einer Pizza?! Dann sagen wir: Musst du nicht mögen. Wirst du aber
                lieben... <a data-bs-toggle="modal" data-bs-target="#pizzaAnanas"
                  class="color-main text-decoration-none" href="#">Weiter lesen</a>
              </p>
              <div class="wrap wrap-card mt-h-t ">
                <div class="btn-secondary bestellenButton">Bestellen</div>
              </div>
            </div>
          </div>
        </div>

        <!-- row 3-->
        <div class="row mt-section">
          <!-- PIZZA TONNO E CIPOLLA -->
          <div class="col-lg-4">
            <img class="w-75 img-card" src="imgs/pizza-thunfisch.webp" alt="Pizza thunfisch" title="Pizza Thunfisch">

            <div class="detail-container">
              <h2 class="titel-h3-v2">PiZZA TONNO E CiPOLLA</h2>
              <p class="mt-h-t mb-0">Diese Sorte schmeckt auch dem Gewissen. Wer mag Fisch, dann hier bist du richtig!
                <a data-bs-toggle="modal" data-bs-target="#pizzaTonno" class="color-main text-decoration-none"
                  href="#">Weiter lesen</a>
              </p>
              <div class="wrap wrap-card mt-h-t ">
                <div class="btn-secondary bestellenButton">Bestellen</div>
              </div>
            </div>
          </div>

          <!-- PIZZA QUATTRO FORMAGGI -->
          <div class="col-lg-4 main-card">
            <img class="w-75 img-card" src="imgs/pizza-kaese.webp" alt="PiZZA QUATTRO FORMAGGi"
              title="Pizza Quattro Formaggi">

            <div class="detail-container">
              <h2 class="titel-h3-v2">PiZZA QUATTRO FORMAGGi</h2>
              <p class="mt-h-t mb-0">Die Mischung von Mozzarella, Bergkäse, Cheddar und Blauschimmelkäse? Leeeeeker! <a
                  data-bs-toggle="modal" data-bs-target="#pizzaQuattro" class="text-decoration-none color-main"
                  href="#">Weiter lesen</a></p>
              <div class="wrap wrap-card mt-h-t ">
                <div class="btn-secondary bestellenButton">Bestellen</div>
              </div>
            </div>
          </div>

          <!-- PIZZA SOLO -->
          <div class="col-lg-4 main-card">
            <img class="w-75 img-card" src="imgs/pizzasolo.webp" alt="Pizza solo" title="Pizza solo">

            <div class="detail-container">
              <h2 class="titel-h3-v2">PiZZA solo</h2>
              <p class="mt-h-t mb-0">Du kannst Pizza belegen, mit was immer du willst: mit Gemüse, Fisch, Fleisch,… was
                die sonst noch so in den Geschmackssinn kommt. Klingt geil oder? Besuch mal BACIO Restaurant!</p>

                <div class="wrap wrap-card mt-h-t ">
                <a href="contact.php" class="btn-secondary">Besuch uns!</a>
              </div>
            </div>
          </div>
        </div>

        <div id="messageContainer" class="mt-2">
          Deine Pizza wurde in den Warenkorb hinzugefügt!
        </div>
        <?php include('modal.php') ?>
      </div>
    </section>
  </main>

  <?php include('footer.php') ?>
  <!-- Bootstrap JS -->
  <script src="js/bootstrap.bundle.min.js"></script>
  <script>
  function showMessage() {
    let messageContainer = document.getElementById('messageContainer');
    messageContainer.style.display = 'block';

    setTimeout(function() {
      messageContainer.style.display = 'none';
    }, 5000);
  }

  let buttons = document.querySelectorAll('.bestellenButton');
  buttons.forEach(function(button) {
    button.addEventListener('click', function() {
      showMessage();
    });
  });
  </script>
</body>

</html>