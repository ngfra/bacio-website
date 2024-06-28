<?php include('head.php'); ?>
<title>Error <?= $_GET['code']; ?></title>
</head>

<body>
  <?php include('nav.php')?>
  <div class="fullscreen">

    <header>
      <div class="container header-container mt-section">
        <img class="w-50" src="imgs/illustrations-svg/404.svg" alt="">
      </div>
    </header>

    <main>
      <?php include('group-social.php')?>

      <section class="mt-section extra-container ">
        <div class="container ">
          <p class="text-center font-header ">Hoppla! Hier ist nichts zu sehen! <br>
            Keine Sorge, folge einfach dem Duft von frischer Pizza zurück zur Startseite und alles ist wieder in
            Ordnung!</p>

          <div class="wrap d-flex justify-content-center"><a class="btn-secondary" href="index.php">zurück zur Home</a>
          </div>
        </div>
      </section>
    </main>
</body>

</html>