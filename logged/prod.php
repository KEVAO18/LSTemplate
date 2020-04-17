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
        navbarLog("Products - ".$_SESSION['user']);
      ?>
    <!-- /Navbar -->
    <!-- section -->
    <br>
    <br>
    <br>
    <br>
    <br>
    <center><h1>Products</h1></center>
    <br>
    <div class="container">
      <div class="row">
        <?php
          cardsP("../");
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
    <?php
    for ($i=1; $i < $_SESSION['count']+1 ; $i++) { 
      ?>
    <script>
      $(document).on("ready", dol<?=$i?>());

      function dol<?=$i?>() {

        $("#download<?=$i?>").on("click", function(e){
          var frm = {
            'id': <?=$i?>
          };
          $.ajax({
            type: "POST",
            url: "../assets/backend/like.php?op=3",
            dataType: "json",
            data: frm
          }).done(function (info) {
            if (info.down != "This app is not available") {
              alert(info.name+" is downloaded");
            }else{
              e.preventDefault();
              alert(info.down);
            }
          })
        });
      }
    </script>
      <?php
    }
    ?>
  </body>
</html>