<?php include('head.php'); ?>
<title>BACIO Erlebnis</title>

<body>
  <!-- navigation -->
  <?php include('nav.php')?>

  <header>
    <div class="container header-container">
      <h1 class="titel-h1 mt-section text-center">für Dein BACiO-Erlebnis</h1>
      <p class="font-header">Ergänze dein BACIO-Erlebnis mit unserem ausgewählten Zubehör, was du für den perfekten Genuss brauchst.</p>
      <img class="header-item-right" width="250px" src="imgs/illustrations-svg/Pizza-story.svg" alt="frische Pilze">

    </div>
  </header>

  <main>
    <?php include('group-social.php')?>

    <section class="mt-50">
      <div class="container accesories-container">
        <div class="row d-flex align-items-center ">
          <div class="col-md-5 d-flex justify-content-center">
            <img data-aos="fade-up" class="w-100" src="imgs/bacio-kochschuerze.webp" alt="bacio-kochschürze"
            title="BCIO Kochschürze">
          </div>
          <div data-aos="fade-up" class="col-md-7">
            <h2 class="titel-h3-v2">bacio kochschürze</h2>
            <p  class="mt-h-t">Unsere stilvoller Kochschürze schützt nicht nur deine Kleidung, sondern lässt dich auch wie ein echte Pizzaiolo fühlen. Aus hochwertigem, langlebigem Material gefertigt und mit dem BACIO-Logo versehen, ist sie der perfekte Begleiter für deine Kochabenteuer! </p>
            <div class="wrap mt-h-t ">
                <div class="btn-secondary bestellenButton">Bestellen</div>
              </div>
          </div>
        </div>
      </div>

      <div class="container accesories-container ">
        <div class="row d-flex align-items-center reverse-order-mobile">
          <div class="col-md-7"  data-aos="fade-up">
            <h2 class="titel-h3-v2">bacio Holzteller</h2>
            <p class="mt-h-t">Serviere deine Pizza stilecht auf unserem edlen Holzteller mit eleganter Prägung. Dieser hochwertige Teller ist nicht nur ein Hingucker, sondern bringt auch ein Stück italienische Tradition auf deinen Tisch!</p>
            <div class="wrap mt-h-t ">
                <div class="btn-secondary bestellenButton">Bestellen</div>
              </div>
          </div>
          <div class="col-md-5 d-flex justify-content-center">
            <img  data-aos="fade-up" class="w-100" src="imgs/bacio-holzteller.webp" alt="bacio Holzteller"
            title="BACIO Holzteller">
          </div>
        </div>
      </div>

      <div class="container accesories-container">
        <div class="row d-flex align-items-center ">
          <div class="col-md-5 d-flex justify-content-center">
            <img  data-aos="fade-up" class="w-100" src="imgs/bacio-tasche.webp" alt="bacio-taschee"
            title="BACIO Tasche">
          </div>
          <div class="col-md-7"  data-aos="fade-up">
            <h2 class="titel-h3-v2 ">bacio tasche</h2>
            <p class="mt-h-t">Trage deine BACIO-Liebe überallhin mit unserer nachhaltigen Stoff-Tote-Tasche. Aus recycelten Materialen gefertigt, bietet sie ausreichend Platz für all deine Einkäufe und setzt ein Zeichen für Umweltbewusstsein. Perfekt für den täglichen Gebrauch.</p>
            <div class="wrap mt-h-t ">
                <div class="btn-secondary bestellenButton">Bestellen</div>
              </div>
          </div>
        </div>

        <div id="messageContainer" class="mt-2">
          Dein Produkt wurde in den Warenkorb hinzugefügt!
        </div>
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