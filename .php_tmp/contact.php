<?php include('head.php'); ?>
<title>BACIO | Kontakt</title>

<body>
  <!-- navigation -->
  <?php include('nav.php')?>

  <header>
    <div class="container header-container">
      <h1 class="titel-h1 mt-section text-center">hier findest du bacio</h1>

      <img class="header-item-right" width="150px" src="imgs/illustrations-svg/location.png" alt="Bacio werbespot">
    </div>
  </header>

  <main>
    <?php include('group-social.php')?>

    <section class="mt-50">
      <div class="container">
        <div class="row align-items-end">
          <div class="col-md-6">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d86607.36051626624!2d11.296398768023694!3d47.28541841780851!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x479d6ecfe1f8ca73%3A0x9d201c7d281d9b0d!2sInnsbruck!5e0!3m2!1sen!2sat!4v1718484843773!5m2!1sen!2sat"
              width="100%" height="450" style="border: radius 10px;" allowfullscreen="" loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>

          <div class="col-md-6 mt-h-t">
            <address class="my-0 ">
              <span class="titel-h3-v2">Pizza BACiO</span> <br>
              <strong>Adresse: </strong>Innstraße 11, 6020 Innsbruck <br>
              <strong>Öffnungszeit:</strong> Dienstag - Sonntag: 10 Uhr - 22 Uhr <br>
              <strong>Telefonnummer:</strong><a class="text-decoration-none color-main" href="tel:+43 67763450912"> +43
                634 5091123</a> <br>
              <strong>E-mail:</strong> <a class="text-decoration-none color-main"
                href="mailto:contact@pizzabacio.com">contact@pizzabacio.com</a>
            </address>
          </div>
        </div>
      </div>
    </section>

    <section class="mt-50">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h3 class="titel-h3">hast du neues "Rezept"</h3>
            <p class="mt-h-t">...die du gern mit uns teilen möchtest? Ganz egal, ob es um Feedback, Fragen, Anregungen
              oder Wünsche für neue Pizzasorten geht – wir freuen uns auf jede Nachricht von dir und darauf, von deinem
              BACIO-Erlebnis zu hören! <br>
              Kontaktiere uns!</p>
            <img height="60px" src="imgs/illustrations-svg/logo-claim.png" alt="bacio logo claim">
          </div>
          <div class="col-md-6 mt-h-t">
            <form method="post" action="mail.php" class="needs-validation" novalidate>
              <div class="mb-3">
                <input id="validationCustom01" name="name" placeholder="Name*" type="text" class="form-control"
                  required />
                <div class="valid-feedback">
                  Sieht gut aus!
                </div>
                <div class="invalid-feedback">
                  Hmmm, du hast die Hauptzutat vergessen!
                </div>
              </div>

              <div class="mb-3">
                <input name="email" placeholder="Email-Adresse*" type="email" class="form-control" required />
                <div class="valid-feedback">
                  Yup! Authentisch!
                </div>
                <div class="invalid-feedback">
                  Ohne diese Zutat geht nicht!
                </div>
              </div>

              <div class="mb-3">
                <textarea name="message" id="message" placeholder="Deine Nachricht*" class="form-control" cols="30"
                  rows="5" required></textarea>
                <div class="valid-feedback">
                  Jaaa, dein Rezept ist bereits zum Schicken!
                </div>
                <div class="invalid-feedback">
                  Mit einbisschen Liebe ist immer besser!
                </div>
              </div>

              <div class="mb-3 form-check">
                <input required type="checkbox" class="form-check-input" id="dsgvo" />
                <label class="form-check-label" for="dsgvo">Ich akzeptiere die <a
                    class="color-main text-decoration-none" href="datenschutz.php">Datenschutzerklärung</a> und stimme
                  der Verarbeitung meiner Daten zu.</label>
                <div class="valid-feedback">
                  Super!!!
                </div>
                <div class="invalid-feedback">
                  Letzte Schritte bitte nicht vergessen!
                </div>
              </div>

              <button type="submit" class="btn btn-secondary" name="submit">SENDEN</button>
            </form>
          </div>
        </div>

      </div>
    </section>
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