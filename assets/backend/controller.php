<?php

	function navbar($lugar=""){
		echo "<!-- Navbar -->
      <div class='navbar navbar-expand-md navbar-dark fixed-top rojo scrolling-navbar'>
        <div class='container'>
          <a class='navbar-brand' href='index.php' data-toggle='modal' data-target='#sidebar'><i style='color: #ffffff' class='fas fa-bars'></i></a>
            <ul class='navbar-nav mr-auto'>
              <li class='nav-item'>
                <a class='nav-link' href=''>LearnSoft</a>
              </li>
            </ul>
        </div>
      </div>
        <!-- Modal -->
        <div class='modal left fade' id='sidebar' tabindex='1' role='dialog' aria-labelledby='exampleModalLabel'
          aria-hidden='true'>
          <div class='modal-dialog modal-full-height modal-left' role='document'>
            <div class='modal-content'>
              <div class='modal-header'>
                <h5 class='modal-title' id='exampleModalLabel'>".$lugar."</h5>
                <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                  <span aria-hidden='true'><i style='color: #000000' class='fas fa-bars'></i></span>
                </button>
              </div>
              <div class='modal-body'>
                <div class='container'>
                  <div class='card' style='box-shadow: 0 0 0 #fff;'>
                    <ul class='list-group list-group-flush'>
                      <li class='list-group-item'>
                        <center>
											<li class='list-group-item menu'><a href='index.php' style='color: #444444cc'>Home</a></li>
                      <li class='list-group-item menu'><a href='prod.php' style='color: #444444cc'>Projects</a></li>
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
          <a href='' target='_blank' class='link' title='GitHub'>
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

  function cards(){
    $prod = ["¡Yeah English Yeah!", "War of Mathematics"];
    $IP = ["yey.png", "WM.png"];
    $descs = ["Yeah English Yeah! It is a website where we focus on the reinforcement of the English language of the students of the I. E. INEM José Félix de Restrepo of the IX degree... <a href='' >More</a>", "This application focuses on strengthening knowledge of basic mathematics in people of all ages, because we have... <a href='prod.php' >More</a>"];
    $links = ["","https://gum.co/npEl"];
    $tit = ["Aun No Esta Listo","War of Mathematics"];
    $i=0;
    foreach ($prod as $prod) {
    echo "<div class='col-md-4 mb-4'>
            <div class='card'>
              <div class='card-img-top text-center py-4'>
                <img src='assets/multimedia/".$IP[$i]."' class='' style='width: 18rem;'>
              </div>
              <div class='card-body'>
                <h4 class='card-title'>".$prod."</h4>
                <p class='card-text'>".$descs[$i]."</p>
              </div>
          </div>
        </div>";
        $i = $i+1;
    }
  }

  function cardsP(){
    $prod = ["¡Yeah English Yeah!", "War of Mathematics"];
    $IP = ["yey.png", "WM.png"];
    $descs = ["Yeah English Yeah! It is a website where we focus on the reinforcement of the English language of the students of the I. E. INEM José Félix de Restrepo of the IX degree. This web page seeks to solve the difficulties that arise in some students of the grade mentioned above when writing or speaking in English. We seek to reinforce these shortcomings with questions and somewhat didactic mechanics but in order to arouse the interest of students in the English language and thus facilitate their development in language learning.", "This application focuses on strengthening knowledge of basic mathematics in people of all ages, because we have simple additions, subtractions, multiplications, and divisions.<br>For students and math lovers."];
    $links = ["","https://gum.co/npEl"];
    $tit = ["Aun No Esta Listo","War of Mathematics"];
    $i=0;
    foreach ($prod as $prod) {
    echo "<div class='col-md-4 mb-4'>
            <div class='card'>
              <div class='card-img-top text-center py-4'>
                <img src='assets/multimedia/".$IP[$i]."' class='' style='width: 18rem;'>
              </div>
              <div class='card-body'>
                <h4 class='card-title'>".$prod."</h4>
                <p class='card-text'>".$descs[$i]."</p>
                <a class='gumroad-button' href='".$links[$i]."'>".$tit[$i]."</a>
                <a href='#'></a>
              </div>
          </div>
        </div>";
        $i = $i+1;
    }
  }

?>