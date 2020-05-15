<?php include("initialize.php"); ?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>JK events</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/business-casual.css" rel="stylesheet">

  </head>

  <body>

    <h1 class="site-heading text-center text-white d-none d-lg-block">
      <span class="site-heading-upper text-primary mb-3">JK Events</span>
      <span class="site-heading-lower">Intens Festival</span>
    </h1>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
      <div class="container">
        <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#">Intens Festival</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="index.html">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="info.html">INFO</a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="media.html">MEDIA</a>
            </li>
            <li class="nav-item active px-lg-4">
            <?php if(isset($_SESSION['login'])) {?>
                <a class="nav-link text-uppercase text-expanded" href="profiel.php">PROFIEL</a>
              <?php } else  { ?>
                <a class="nav-link text-uppercase text-expanded" href="login.php">INLOGGEN</a>
              <?php }?>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <section class="page-section cta">
      <div class="container">
        <div class="row">
          <div class="col-xl-9 mx-auto">
              <h2 class="section-heading mb-5">
                <span class="section-heading-upper"></span>
                <span class="section-heading-lower">Registreren</span>
              </h2>
              <ul class="list-unstyled list-hours mb-5 text-left mx-auto">
                <div id="registratie">
                    <form action="confirmRegistratie.php" method="POST">
                    Voornaam: <input type="text" name="Voornaam" id=""><br>
                    Tussenvoegsel: <input type="text" name="Tussenvoegsel" id=""><br>
                    Achternaam: <input type="text" name="Achternaam" id=""><br>
                    E-mail: <input type="email" name="Email" id=""><br>
                    Telefoonnummer: <input type="tel" name="Telefoonnummer" id=""><br>
                    Woonplaats: <input type="text" name="Woonplaats" id=""><br>
                    Straatnaam: <input type="text" name="Straatnaam" id=""><br>
                    Huisnummer: <input type="number" name="Huisnummer" id=""><br>
                    Postcode <input type="text" name="Postcode" id=""><br>
                    Wachtwoord <input type="password" name="wachtwoord" id=""><br>
                    <input type="submit">
                    </form>
                </div>
              </ul>
            </div>
        </div>
      </div>
    </section>

    <footer class="footer text-faded text-center py-5">
      <div class="container">
        <p class="m-0 small">Copyright &copy; Your Website 2018</p>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

  <!-- Script to highlight the active date in the hours list -->
  <script>
    $('.list-hours li').eq(new Date().getDay()).addClass('today');
  </script>

</html>
