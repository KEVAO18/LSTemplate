<?php
  include 'assets/backend/controller.php';
  session_start();
  if (isset($_SESSION['user'])) {
    header("location: logged/");
  }
?>
<!DOCTYPE html>
<html lang='en'>
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
    </head> 
    <body>
      <?php
        navbar("Home");
      ?>
    <!-- /Navbar -->

    <!-- header -->
    <header class="back">
      <div class="text-center img-favicon">
        <img style="width: 140px;" src="assets/multimedia/Exclude.png" alt="LernSoft"><br><h2 style="color: salmon;"><b>LearnSoft</b></h2>
      </div>
    </header>
    <!-- /header -->

    <!-- section -->
    <br>
    <br>
    <div class="container">
      <div class="row">
        <?php
          cards("");
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
    <!-- scripts -->
    <script>
    //Signup modal
    var r = 0;

    $(document).on("ready", Register());

    function Register(){
      $("#send1").on("click", function(e){
        e.preventDefault();
        var frm = $("#formReg").serialize();
        $.ajax({
          type: "POST",
          url: "assets/backend/optained.php?op=1",
          data: frm
        }).done(function (info) {
          if (info == "Complete") {
            if (r == 0) {
              document.getElementById('p-reg').innerHTML = "Good, now SignIn";
              document.getElementById('alt-reg').classList.add('alert-success');
              alert("Welcome");
            }else{
              document.getElementById('p-reg').innerHTML = "Good, now SignIn";
              document.getElementById('alt-reg').classList.remove('alert-danger');
              document.getElementById('alt-reg').classList.add('alert-success');
              alert("Welcome");
            }
          }else{
            r = 1;
            document.getElementById('p-reg').innerHTML = info;
            document.getElementById('alt-reg').classList.add('alert-danger');
          }
        })
      });
    }

    //signin modal

    $(document).on("ready", SignIn());

    function SignIn(){
      $("#send2").on("click", function(e){
        e.preventDefault();
        var frm = $("#formSig").serialize();
        $.ajax({
          type: "POST",
          url: "assets/backend/optained.php?op=2",
          data: frm
        }).done(function (info) {
          if (info == "logging in") {
            window.location.href = 'logged/';
            alert("Welcome");
          }else{
            document.getElementById('p-sig').innerHTML = info;
            document.getElementById('alt-sig').classList.add('alert-danger');
          }
        })
      });
    }
    </script>
  </body>
</html>