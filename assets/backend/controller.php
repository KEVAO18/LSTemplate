<?php

  function login($value=''){
    echo "<div class='modal fade right' id='SignIn' tabindex='-1' role='dialog' aria-labelledby='exampleModalPreviewLabel' aria-hidden='true'>
      <div class='modal-dialog modal-side modal-bottom-right' role='document'>
        <div class='modal-content'>
          <div class='modal-header rojo-2 text-white z-depth-1'>
            <h5 class='modal-title' id='exampleModalPreviewLabel'>Sign In</h5>
            <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
              <span aria-hidden='true'>&times;</span>
            </button>
          </div>
          <div class='modal-body'>
            <form class='container' id='formSig' role='form'>
              <div class='alert' id='alt-sig' role='alert'>
                <p id='p-sig'></p><a href='#' id='a-sig' class='alert-link'></a>
              </div>
              <div class='md-form mt-3'>
                <input type='text' id='userOrEmailSig' class='form-control' name='userOrEmailSig' required>
                <label for='userOrEmailSig'> <i class='fa fa-user grey-text'></i> - Username or email</label>
              </div>
              <div class='md-form mt-3'>
                <input type='password' id='passSig' class='form-control' name='passSig' required>
                <label for='passSig'> <i class='fas fa-key grey-text'></i> - Password</label>
              </div>
              <button id='send2' class='btn azul-2 text-white'>Ok</button>
              <button type='button' class='btn rojo-2 text-white' data-dismiss='modal'>Cancel</button>
            </form>
          </div>
        </div>
      </div>
    </div>";

    echo "<div class='modal fade right' id='SignUp' tabindex='-1' role='dialog' aria-labelledby='exampleModalPreviewLabel' aria-hidden='true'>
      <div class='modal-dialog modal-full-height modal-right' role='document'>
        <div class='modal-content'>
          <div class='modal-header rojo-2 text-white z-depth-1'>
            <h5 class='modal-title' id='exampleModalPreviewLabel'>Sign Up</h5>
            <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
              <span aria-hidden='true'>&times;</span>
            </button>
          </div>
          <div class='modal-body'>
            <form class='container' id='formReg' role='form'>
              <div class='alert' id='alt-reg' role='alert'>
                <p id='p-reg'></p><a href='#' id='a-reg' class='alert-link'></a>
              </div>
              <div class='md-form mt-3'>
                <input type='text' id='nameReg' class='form-control' name='nameReg' required>
                <label for='nameReg'> <i class='fa fa-user grey-text'></i> - Name</label>
              </div>
              <div class='md-form mt-3'>
                <input type='text' id='userReg' class='form-control' name='userReg' required>
                <label for='userReg'> <i class='fa fa-user grey-text'></i> - Username</label>
              </div>
              <div class='md-form mt-3'>
                <input type='text' id='emailReg' class='form-control' name='emailReg' required>
                <label for='emailReg'> <i class='fa fa-envelope grey-text'></i> - E-mail</label>
              </div>
              <div class='md-form mt-3'>
                <input type='password' id='passReg' class='form-control' name='passReg' required>
                <label for='passReg'> <i class='fas fa-key grey-text'></i> - Password</label>
              </div>
              <div class='md-form mt-3'>
                <input type='password' id='repassReg' class='form-control' name='repassReg' required>
                <label for='repassReg'> <i class='fas fa-key grey-text'></i> - Re Password</label>
              </div>
              <div class='md-form mt-3'>
                <input type='number' id='ageReg' class='form-control' name='ageReg' required>
                <label for='ageReg'> <i class='fas fa-sort-numeric-up grey-text'></i> - Age</label>
              </div>
              <div class='md-form mt-3 text-center'>
                <small>At the time of registration, you're agree to all of our terms and conditions.</small>
              </div>
              <button id='send1' class='btn azul-2 text-white'>Ok</button>
              <button type='button' class='btn rojo-2 text-white' data-dismiss='modal'>Cancel</button>
            </form>
          </div>
        </div>
      </div>
    </div>";
    
  }

	function navbar($lugar=""){
		echo "<!-- Navbar -->
      <div class='navbar navbar-expand-md navbar-dark fixed-top rojo scrolling-navbar'>
        <div class='container'>
          <a class='navbar-brand' href='index.php' data-toggle='modal' data-target='#sidebar'><i style='color: #ffffff' class='fas fa-bars'></i></a>
            <ul class='navbar-nav mr-auto'>
              <li class='nav-item'>
                <a class='nav-link' href='index.php'>LearnSoft</a>
              </li>
            </ul>
            <ul class='navbar-nav'>
              <li class='nav-item' style='color:#ffffff;'>
                <a class='nav-link'>".date('Y-m-d')."</a>
              </li>
            </ul>
        </div>
      </div>
        <!-- Modal -->
        <div class='modal left fade' id='sidebar' tabindex='1' role='dialog' aria-labelledby='exampleModalLabel'
          aria-hidden='true'>
          <div class='modal-dialog modal-side modal-top-left' role='document'>
            <div class='modal-content'>
              <div class='modal-header rojo-2 text-white z-depth-1'>
                <h5 class='modal-title' id='exampleModalLabel'>".$lugar."</h5>
                <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                  <span aria-hidden='true'>&times;</span>
                </button>
              </div>
              <div class='modal-body'>
                <div class='container'>
                  <div class='card' style='box-shadow: 0 0 0 #fff;'>
                    <ul class='list-group list-group-flush'>
                      <li class='list-group-item'>
                        <center>
					                <li class='list-group-item menu'>
                            <a href='index.php' style='color: #444444cc'>Home</a>
                          </li>
                          <li class='list-group-item menu'>
                            <a href='prod.php' style='color: #444444cc'>Projects</a>
                          </li>
                          <li class='list-group-item menu'>
                            <a style='color: #444444cc' href='#' id='modalActivate' type='button' data-toggle='modal' data-target='#SignIn'>Sign In</a>
                          </li>
                          <li class='list-group-item menu'>
                            <a style='color: #444444cc' href='#' id='modalActivate' type='button' data-toggle='modal' data-target='#SignUp'>Sign Up</a>
                          </li>
                        <center>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /modal -->
      <!-- /navbar -->";
      login();
	}

  function navbarLog($lugar=""){
    echo "<!-- Navbar -->
      <div class='navbar navbar-expand-md navbar-dark fixed-top rojo scrolling-navbar'>
        <div class='container'>
          <a class='navbar-brand' href='index.php' data-toggle='modal' data-target='#sidebar'><i style='color: #ffffff' class='fas fa-bars'></i></a>
            <ul class='navbar-nav mr-auto'>
              <li class='nav-item'>
                <a class='nav-link' href='index.php'>LearnSoft</a>
              </li>
            </ul>
            <ul class='navbar-nav'>
              <li class='nav-item' style='color:#ffffff;'>
                <a class='nav-link'>".date('Y-m-d')."</a>
              </li>
            </ul>
        </div>
      </div>
        <!-- Modal -->
        <div class='modal left fade' id='sidebar' tabindex='1' role='dialog' aria-labelledby='exampleModalLabel'
          aria-hidden='true'>
          <div class='modal-dialog modal-side modal-top-left' role='document'>
            <div class='modal-content'>
              <div class='modal-header rojo-2 text-white z-depth-1'>
                <h5 class='modal-title' id='exampleModalLabel'>".$lugar."</h5>
                <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                  <span aria-hidden='true'>&times;</span>
                </button>
              </div>
              <div class='modal-body'>
                <div class='container'>
                  <div class='card' style='box-shadow: 0 0 0 #fff;'>
                    <ul class='list-group list-group-flush'>
                      <li class='list-group-item'>
                        <center>
                          <li class='list-group-item menu'>
                            <a href='index.php' style='color: #444444cc'>Home</a>
                          </li>
                          <li class='list-group-item menu'>
                            <a href='prod.php' style='color: #444444cc'>Projects</a>
                          </li>
                          <li class='list-group-item menu'>
                            <a href='../assets/backend/exit.php' style='color: #444444cc'>Exit</a>
                          </li>
                        <center>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /modal -->
      <!-- /navbar -->";
  }

	function footer(){
		echo "<!-- Footer -->
      <footer class='py-3'>
        <div class='container'>
          <div class='row pb-4'>
            <div class='col-sm-12'>
              <h5>Founder</h5>
              <p>Kevin Andres Orrego Martinez <br><span style='font-size: 12px;'>(FullStack web developer)</span></p>
              <p style='font-size: 12px;'><?php echo date('Y-m-d'); ?></p>
            </div>
            <div class='col-sm-4'>
            </div>
          </div>
        </div>
        <center>
          © 2019 Copyright: LearnSoft.
          <a href='https://github.com/KEVAO18/LSTemplate' target='_blank' class='link' title='GitHub'>
            <i class='fab fa-github-alt'></i>
          </a>
          <a href='https://www.paypal.me/KevinOrrego?locale.x=es_XC' target='_blank' class='link' title='Donaciones'>
            <i class='fab fa-paypal'></i>
          </a>
          <!-- <a href='' target='_blank' class='link' title='Patreon'><i class='fab fa-patreon'></i></a> -->
          <a href='https://kevaosportafolio.000webhostapp.com/index.html' target='_blank' class='link' title='Mi pagina web'>
            <i class='fas fa-info-circle'></i>
          </a>
        </center>
      </footer>
    <!-- /Footer -->";
	}

  function cards($lugar){
    include 'conexion.php';

    $queryc= "SELECT * FROM `apps`WHERE `id` <= 3 ";

    $rest = $conexion->query($queryc);

    while ($row=$rest->fetch_assoc()) {
      echo "<div class='col-md-4 mb-4'>
            <div class='card'>
              <div class='card-img-top text-center p-4'>
                <img src='".$lugar."assets/multimedia/".$row['img']."' class='' style='width: 100%;'>
              </div>
              <div class='card-body'>
                <h4 class='card-title'>".$row['name']."</h4>
                <p class='card-text'>".$row['predescripcion']."... <a href='prod.php' >More</a></p>
              </div>
          </div>
        </div>";
    }
  }

  function cardsP($lugar){

    include 'conexion.php';

    if (isset($_SESSION['name']) && isset($_SESSION['user'])) {
      $queryc= "SELECT * FROM `apps`";

      $rest = $conexion->query($queryc);

      while ($row=$rest->fetch_assoc()) {
        if ($row['gumroad']) {
          $gum="<a class='gumroad-button' href='".$row['gumroad']."'>".$row['name']."</a>";
        }else{
          $gum="";
        }
        if ($row['links']) {
          $link="<a class='px-2 fa-lg' id='download".$row['id']."' style='color: #747474' data-toggle='tooltip' data-placement='top' title='Downloads' href='".$row['links']."' target='_blank'><i class='fas fa-cloud-download-alt'></i><span class='badge rojo-2'>".$row['downloads']."</span></a>";
        }else{
          $link="<a class='px-2 fa-lg' id='download".$row['id']."' style='color: #747474' data-toggle='tooltip' data-placement='top' title='Downloads'><i class='fas fa-cloud-download-alt'></i><span class='badge rojo-2'>".$row['downloads']."</span></a>";
        }
        echo "<div class='col-md-4 mb-4'>
              <div class='card'>
                <div class='card-img-top text-center p-4'>
                  <img src='".$lugar."assets/multimedia/".$row['img']."' class='' style='width: 100%;'>
                </div>
                <div class='card-body'>
                  <h4 class='card-title'>".$row['name']."</h4>
                  <p class='card-text'>".$row['description']."</p>
                  ".$gum."
                </div>
                  <div class='card-footer text-muted'>
                    <center>
                      <a class='px-2 fa-lg' id='like".$row['id']."' data-toggle='tooltip' data-placement='top' title='Like'><i id='like".$row['id']."' class='far fa-thumbs-up'></i><span class='badge rojo-2'>".$row['likes']."</span></a>
                      <!-- <i class='fas fa-thumbs-up'></i> para poder cambiar el like cambia far por fas-->
                  
                      <a class='px-2 fa-lg' id='dislike".$row['id']."' data-toggle='tooltip' data-placement='top' title='dislike'><i id='dislike".$row['id']."' class='far fa-thumbs-down'></i><span class='badge azul-2'>".$row['dislikes']."</span></a>
                      <!-- <i class='fas fa-thumbs-down'></i> para poder cambiar el like cambia far por fas-->
                  
                      ".$link."
                  
                      <!-- <a class='px-2 fa-lg' data-toggle='tooltip' data-placement='top' title='share'><i class='fas fa-share'></i></a> -->
                    </center>
                  </div>
            </div>
          </div>";
          $_SESSION['count'] = $row['id'];
      }
    }else{
      $queryc= "SELECT * FROM `apps`";

      $rest = $conexion->query($queryc);

      while ($row=$rest->fetch_assoc()) {
        if ($row['gumroad']) {
          $gum="<a class='gumroad-button' href='".$row['gumroad']."'>".$row['name']."</a>";
        }else{
          $gum="";
        }
        if ($row['links']) {
          $link="<a class='px-2 fa-lg' id='download".$row['id']."' style='color: #747474' data-toggle='tooltip' data-placement='top' title='Downloads' href='".$row['links']."' target='_blank'><i class='fas fa-cloud-download-alt'></i><span class='badge rojo-2'>".$row['downloads']."</span></a>";
        }else{
          $link="<a class='px-2 fa-lg' id='download".$row['id']."' style='color: #747474' data-toggle='tooltip' data-placement='top' title='Downloads'><i class='fas fa-cloud-download-alt'></i><span class='badge rojo-2'>".$row['downloads']."</span></a>";
        }
        echo "<div class='col-md-4 mb-4'>
              <div class='card'>
                <div class='card-img-top text-center p-4'>
                  <img src='".$lugar."assets/multimedia/".$row['img']."' class='' style='width: 100%;'>
                </div>
                <div class='card-body'>
                  <h4 class='card-title'>".$row['name']."</h4>
                  <p class='card-text'>".$row['description']."</p>
                  ".$gum."
                </div>
                  <div class='card-footer text-muted'>
                    <center>
                      <a class='px-2 fa-lg' data-toggle='modal' data-target='#frameModalBottom'><i id='like' class='far fa-thumbs-up'></i><span class='badge rojo-2'>".$row['likes']."</span></a>
                      <!-- <i class='fas fa-thumbs-up'></i> para poder cambiar el like cambia far por fas-->
                  
                      <a class='px-2 fa-lg' data-toggle='modal' data-target='#frameModalBottom'><i id='dislike' class='far fa-thumbs-down'></i><span class='badge azul-2'>".$row['dislikes']."</span></a>
                      <!-- <i class='fas fa-thumbs-down'></i> para poder cambiar el like cambia far por fas-->
                  
                      ".$link."
                  
                      <!-- <a class='px-2 fa-lg' data-toggle='tooltip' data-placement='top' title='share'><i class='fas fa-share'></i></a> -->
                    </center>
                  </div>
            </div>
          </div>";
          $_SESSION['count'] = $row['id'];
      }
      echo "<!-- Button trigger modal -->

        <!-- Frame Modal Bottom -->
        <div class='modal fade bottom' id='frameModalBottom' tabindex='-1' role='dialog' aria-labelledby='myModalLabel'
          aria-hidden='true'>
          <div class='modal-dialog modal-frame modal-bottom' role='document'>
            <div class='modal-content'>
              <div class='modal-body'>
                <div class='row d-flex justify-content-center align-items-center'>

                  <p class='pt-3 pr-2'>To use these functions you must register or if you are already registered please log in.</p>

                  <button type='button' class='btn rojo-2 text-white' id='modalActivate' type='button' data-toggle='modal' data-target='#SignIn'>SignIn</button>
                  <button type='button' class='btn azul-2 text-white' id='modalActivate' type='button' data-toggle='modal' data-target='#SignUp'>SignUp</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Frame Modal Bottom -->";
    }
  }

?>