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
    <span class="site-heading-upper text-primary mb-3">JK events</span>
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
          <li class="nav-item active px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="index.php">HOME
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="info.php">INFO</a>
          </li>
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="media.php">MEDIA</a>
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

  <section class="page-section clearfix">
    <div class="container">
      <div class="intro">
        <img class="intro-img img-fluid mb-3 mb-lg-0 rounded" src="img/about.jpg" alt="">
        <div class="intro-text left-0 text-center bg-faded p-5 rounded">
          <h2 class="section-heading mb-4">
            <span class="section-heading-upper">Intens Festival</span>
            <span class="section-heading-lower">Een compleet nieuwe ervaring</span>
          </h2>
          <p class="mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni vel consequatur facilis repellendus voluptatem, corrupti ad cupiditate eius totam fugit soluta iure quae numquam placeat sequi amet porro earum tempore?
          </p>
          <div class="intro-button mx-auto">
          <?php if(isset($_SESSION['login'])) {?>
                <a class="btn btn-primary btn-xl" href="tickets.php">Bestel Tickets</a>
              <?php } else  { ?>
                <a class="btn btn-primary btn-xl" href="login.php">Bestel Tickets</a>
              <?php }?>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="page-section cta">
    <div class="container">
      <div class="row">
        <div class="co3       l-xl-9 mx-auto">
          <div class="cta-inner text-center rounded">
            <h2 class="section-heading mb-4">
              <span class="section-heading-upper">Jk events</span>
              <span class="section-heading-lower">Festival</span>
            </h2>
            <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum, deserunt perferendis. Perspiciatis, pariatur magni similique optio illum doloremque, maiores amet accusantium odit quos nihil alias praesentium vitae voluptates asperiores quisquam.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer class="footer text-faded text-center py-5">
    <div class="container">
      <p class="m-0 small">Copyright &copy; Your Website 2019</p>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
