<?php
  include 'assets/backend/controller.php';
?>
<!DOCTYPE html>
<html lang='es'>
    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, user-scalable=no'>
        <link rel='icon' href='assets/multimedia/Exclude.png'>
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
        <link rel='stylesheet/less' type='text/css' href='assets/css/styles.less' />
        <script src='//cdnjs.cloudflare.com/ajax/libs/less.js/3.9.0/less.min.js' ></script>
        <script src="https://gumroad.com/js/gumroad.js"></script>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-152770313-2"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());
        
          gtag('config', 'UA-152770313-2');
        </script>
    </head> 
    <body>
      <?php
        navbar("Products");
      ?>
    <!-- /Navbar -->
    <!-- section -->
    <br>
    <br>
    <br>
    <br>
    <br>
    <center><h1>Login</h1></center>
    <br>
    <div class="container">
      <div class="row d-flex align-items-center justify-content-center">
        <div class="col-sm-12 col-md-6 col-xl-5">
          <div class="card">
            <div class="card-body z-depth-2 px-4">
              <?php
                if (isset($_GET['res'])) {
                  if ($_GET['res'] == 1) {
                    ?>
                    <div class="alert alert-danger" role="alert">
                      E-mail no registrado porfavor registrese o intente con una cuenta existente
                    </div>
                    <?php
                  }elseif ($_GET['res'] == 2) {
                    ?>
                    <div class="alert alert-danger" role="alert">
                      Contraseña incorrecta
                    </div>
                    <?php
                  }
                }
              ?>
              <form action="assets/backend/iniciar.php?funcion=1" method="post">
                <div class="md-form mt-3">
                  <i class="fa fa-user prefix grey-text"></i>
                  <input type="email" id="form3" class="form-control" name="email">
                  <label for="form3">E-mail</label>
                </div>
                <div class="md-form">
                  <i class="fas fa-key prefix grey-text"></i>
                  <input type="password" id="form4" class="form-control" name="pass">
                  <label for="form4">Contraseña</label>
                </div>
                <div class="text-center my-3">
                  <button type="submit" name="send" class="btn btn-indigo btn-block">Enviar</button>
                </div>
              </form>
              <!-- <center><small>Aun no tienes una cuenta <a href="regis.php">Registrate</a></small></center> -->
            </div>
          </div>
        </div>
      </div>
    </div>
    <br>
    <br>
    <!-- /section -->
            
      <?php
        footer();
      ?>

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