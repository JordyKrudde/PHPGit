<?php
    include("initialize.php");
  

    if(!empty($_POST['email']) && !empty($_POST['wachtwoord'])){
       
        
        $email = $_POST['email'];
        $wachtwoord = $_POST['wachtwoord'];

         $sql = "SELECT * FROM Gebruiker WHERE Email = '$email' AND wachtwoord = '$wachtwoord'";
        
        $query = mysqli_query($db, $sql);

        $row = mysqli_fetch_assoc($query);
       
       $result = mysqli_num_rows($query);
       if($result===1){
          $_SESSION['login'] = true;
          $_SESSION['username'] = $email; 
          $_SESSION['Klant_ID'] = $row['Klant_ID'];
          header("location:profiel.php");
        }
    }
?>

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

    <section class="page-section cta">
      <div class="container">
        <div class="row">
          <div class="col-xl-9 mx-auto">
              <h2 class="section-heading mb-5">
                <span class="section-heading-upper"></span>
                <span class="section-heading-lower">Inloggen</span>
              </h2>
              <ul class="list-unstyled list-hours mb-5 text-left mx-auto">
                <div id="login">
                  <form method="POST">
                      E-mail:<input type="email" name="email"><br>
                      Wachtwoord: <input type="password" name="wachtwoord"> <br>
                      <input type="submit">
                      <p> <a href="registratie.php">Nieuw account aanmaken</a></p>
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