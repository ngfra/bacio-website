<?php include('head.php'); ?>
<title>BACIO | Presse</title>

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
    <form method="post" action="mail.php" class="needs-validation" novalidate>
      <div class="mb-3">
        <input id="validationCustom01" name="name" placeholder="Name*" type="text" class="form-control" required />
        <div class="valid-feedback">
          Look good!
        </div>
        <div class="invalid-feedback">
          Hmmm, du hast den Hauptzutat vergessen!
        </div>
      </div>

      <div class="mb-3">
        <input name="email" placeholder="Email-Adresse*" type="email" class="form-control" required />
        <div class="valid-feedback">
          Look good!
        </div>
        <div class="invalid-feedback">
          Bitte gib eine gültige Email-Adresse ein.
        </div>
      </div>

      <div class="mb-3">
        <textarea name="message" id="message" placeholder="Deine Nachricht*" class="form-control" cols="30" rows="5"
          required></textarea>
        <div class="valid-feedback">
          Look good!
        </div>
        <div class="invalid-feedback">
          Bitte gib deine Nachricht ein.
        </div>
      </div>

      <div class="mb-3 form-check">
        <input required type="checkbox" class="form-check-input" id="dsgvo" />
        <label class="form-check-label" for="dsgvo">Ich akzeptiere die <a class="color-main text-decoration-none"
            href="datenschutz.php">Datenschutzerklärung</a> und stimme der Verarbeitung meiner Daten zu.</label>
        <div class="valid-feedback">
          Look good!
        </div>
        <div class="invalid-feedback">
          Du musst die Datenschutzerklärung akzeptieren.
        </div>
      </div>

      <button type="submit" class="btn btn-primary" name="submit">SENDEN</button>
    </form>
  </main>

  <?php include('footer.php') ?>
  <!-- Bootstrap JS -->
  <script>
  (function() {
    'use strict'

    var forms = document.querySelectorAll('.needs-validation')

    Array.prototype.slice.call(forms)
      .forEach(function(form) {
        form.addEventListener('submit', function(event) {
          if (!form.checkValidity()) {
            event.preventDefault()
            event.stopPropagation()
          }

          form.classList.add('was-validated')
        }, false)
      })
  })()
  </script>
</body>

</html>