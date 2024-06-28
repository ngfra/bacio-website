<?php include('head.php'); ?>
<script src="js/bootstrap.bundle.min.js" defer></script>
<title>BACIO | Pizzen</title>

<body>
  <!-- navigation -->
  <?php include('nav.php')?>

  <header>
    <div class="container header-container">
      <h1 class="titel-h1 mt-section text-center">Authentische für jeden Geschmack</h1>
      <p class="font-header">Entdecke unsere Auswahl an handgemachten Pizzen, die mit besten Zutaten und traditioneller
        italienischer Handwerkskunst gefertigt werden. Für jeden Geschmack die perfekte Pizza.</p>
    </div>
  </header>

  <main>
    <?php include('group-social.php')?>

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
              <p class="mt-h-t mb-0">Hier geht’s um die Wurst - 100% reine Rindersalami. Ein herzhaftes
                Geschmackserlebnis, das jeden Bissen unvergesslich macht.</p>
              <div class="wrap wrap-card mt-h-t"><a data-bs-toggle="modal" data-bs-target="#pizzaSalame"
                  class="btn-main" href="#">weiter lesen</a></div>
            </div>
          </div>

          <!-- pizza prosciutto e funghi -->
          <div class="col-lg-4 main-card">
            <img class="w-75 img-card" src="imgs/margherita.png" alt="Pizza Prosciutto e Funghi"
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
              <h3 class="titel-h3-v2">PiZZA SPINACi E RiCOTTA</h3>
              <p class="mt-h-t mb-0">Die Mutter aller Pizzen, krusprig dünner Teig mit sonnengereiften Tomaten und
                feinster Mozzarella.</p>
              <div class="wrap wrap-card mt-h-t">
                <a data-bs-toggle="modal" data-bs-target="#pizzaMargherita" class="btn-main" href="#">weiter lesen</a>
              </div>
            </div>
          </div>

          <!-- PIZZA SALAME PICCANTE -->
          <div class="col-lg-4 main-card">
            <img class="w-75 img-card" src="imgs/pizza-salami.png" alt="Pizza Salame">

            <div class="detail-container">
              <h3 class="titel-h3-v2">PiZZA SALAME PiCCANTE</h3>
              <p class="mt-h-t mb-0">Hier geht’s um die Wurst - 100% reine Rindersalami. Ein herzhaftes
                Geschmackserlebnis, das jeden Bissen unvergesslich macht.</p>
              <div class="wrap wrap-card mt-h-t"><a data-bs-toggle="modal" data-bs-target="#pizzaSalame"
                  class="btn-main" href="#">weiter lesen</a></div>
            </div>
          </div>

          <!-- PIZZA PROSCIUTTO E ANANAS -->
          <div class="col-lg-4 main-card">
            <img class="w-75 img-card" src="imgs/margherita.png" alt="Pizza Prosciutto e Funghi">

            <div class="detail-container">
              <h3 class="titel-h3-v2">PiZZA PROSCiUTTO E ANANAS</h3>
              <p class="mt-h-t mb-0">Frische Pilze und Hinterschinken spielen in Sachen Geschmack ganz vorne mit.</p>
              <div class="wrap wrap-card mt-h-t"><a data-bs-toggle="modal" data-bs-target="#pizzaProsciutto" class="btn-main" href="#">weiter lesen</a></div>
            </div>
          </div>
        </div>
        
         <!-- row 3-->
         <div class="row mt-section">
          <!-- PIZZA TONNO E CIPOLLA -->
          <div class="col-lg-4">
            <img class="w-75 img-card" src="imgs/margherita.png" alt="Pizza Margherita">

            <div class="detail-container">
              <h3 class="titel-h3-v2">PiZZA TONNO E CiPOLLA</h3>
              <p class="mt-h-t mb-0">Die Mutter aller Pizzen, krusprig dünner Teig mit sonnengereiften Tomaten und
                feinster Mozzarella.</p>
              <div class="wrap wrap-card mt-h-t">
                <a data-bs-toggle="modal" data-bs-target="#pizzaMargherita" class="btn-main" href="#">weiter lesen</a>
              </div>
            </div>
          </div>

          <!-- PIZZA QUATTRO FORMAGGI -->
          <div class="col-lg-4 main-card">
            <img class="w-75 img-card" src="imgs/pizza-salami.png" alt="Pizza Salame">

            <div class="detail-container">
              <h3 class="titel-h3-v2">PiZZA QUATTRO FORMAGGi</h3>
              <p class="mt-h-t mb-0">Hier geht’s um die Wurst - 100% reine Rindersalami. Ein herzhaftes
                Geschmackserlebnis, das jeden Bissen unvergesslich macht.</p>
              <div class="wrap wrap-card mt-h-t"><a data-bs-toggle="modal" data-bs-target="#pizzaSalame"
                  class="btn-main" href="#">weiter lesen</a></div>
            </div>
          </div>

          <!-- PIZZA SOLO -->
          <div class="col-lg-4 main-card">
            <img class="w-75 img-card" src="imgs/margherita.png" alt="Pizza Prosciutto e Funghi">

            <div class="detail-container">
              <h3 class="titel-h3-v2">PiZZA solo</h3>
              <p class="mt-h-t mb-0">Frische Pilze und Hinterschinken spielen in Sachen Geschmack ganz vorne mit.</p>
              <div class="wrap wrap-card mt-h-t"><a data-bs-toggle="modal" data-bs-target="#pizzaProsciutto" class="btn-main" href="#">weiter lesen</a></div>
            </div>
          </div>
        </div>

        <?php include('modal.php') ?><
      </div>
    </section>
  </main>

  <?php include('footer.php') ?>
  <!-- Bootstrap JS -->
  <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>