<?php
  include '../assets/backend/controller.php';
  session_start();
  if (!isset($_SESSION['user'])) {
    header("location: ../");
  }
?>
<!DOCTYPE html>
<html lang='en'>
    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, user-scalable=no'>
        <link rel='icon' href='../assets/multimedia/Exclude.png'>
        <title>LernSoft</title>

        <!-- Font Awesome -->
        <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.8.2/css/all.css'>
        <!-- Bootstrap core CSS -->
        <link href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css' rel='stylesheet'>
        <!-- Material Design Bootstrap -->
        <link href='https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.10.1/css/mdb.min.css' rel='stylesheet'>
        <!-- Custom styles  -->
        <!-- <link rel='stylesheet' type='text/css' href='assets/css/barra.css'> -->
        <!-- LESS -->
        <link rel='stylesheet/less' type='text/css' href='../assets/css/styles.less' />
        <script src='//cdnjs.cloudflare.com/ajax/libs/less.js/3.9.0/less.min.js' ></script>
    </head> 
    <body>
      <?php
        navbarLog("Home - ".$_SESSION['user']);
      ?>
    <!-- /Navbar -->

    <!-- header -->
    <header class="back">
      <div class="text-center img-favicon">
        <img style="width: 140px;" src="../assets/multimedia/Exclude.png" alt="LernSoft"><br><h2 style="color: salmon;"><b>LearnSoft</b></h2>
      </div>
    </header>
    <!-- /header -->

    <!-- section -->
    <br>
    <br>
    <div class="container">
      <div class="row">
        <?php
          cards("../");
        ?>
      </div>
    </div>
    <!-- /section -->
            
      <?php
        footer();
      ?>
    <script src="https://gumroad.com/js/gumroad.js"></script>
    <!-- ajax -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- JQuery -->
    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
    <!-- Bootstrap tooltips -->
    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js'></script>
    <!-- Bootstrap core JavaScript -->
    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js'></script>
    <!-- MDB core JavaScript -->
    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.10.1/js/mdb.min.js'></script>
  </body>
</html>