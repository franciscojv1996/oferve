<!doctype html>
<html lang="en">

<head>
  <title>Ofer</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="shortcut icon" href="img/oferve.png" type="image/x-icon">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/estilo.css">
  <link rel="stylesheet" href="css/estiloMovil.css">
</head>

<body>
  <?php
  include "php/contacto.php";
  include "php/open.php";
  include "php/nosotros.php";
  ?>

  <div class="d-none d-xl-block d-lg-block d-md-none d-sm-none d-xs-none">
    <ul class="text-center"> <br><br><br><br>
      <li><a href="#section1"> <img src="img/home.png" height="32px" width="32px"> </a></li> <br><br>
      <li><a href="#section2"> <img src="img/nosotros.png" height="32px" width="32px"> </a></li> <br><br>
      <li><a href="#section3"> <img src="img/open.png" height="32px" width="32px"> </a></li> <br><br>
      <li><a href="#section4"> <img src="img/contac.png" height="32px" width="32px"> </a></li>
    </ul>

    <div class="cuerpo">
      <div id="section1" class="slider-1">

      </div>
      <div id="section2" class="slider-2">
        <?php
        $nostros = new nosotros;
        $nostros->Informacion();
        ?>
      </div>
      <div id="section3" class="slider-3">
        <?php
        $open = new sistema;
        $open->botones();
        ?>
      </div>
      <div id="section4" class="slider-4">
        <div class="container">
          <?php
          $cont = new formulario;
          $cont->Contacto();
          ?>
        </div>
      </div>
    </div>
  </div>

  <!--   d-none d-md-block -->
  <div class="d-xl-none d-lg-none d-md-block d-sm-block d-xs-block">
    <div class="navbar">
      <a href="#movil1"> <img src="img/home.png" height="32px" width="32px"> </a>
      <a href="#movil2"> <img src="img/nosotros.png" height="32px" width="32px"> </a>
      <a href="#movil3"> <img src="img/open.png" height="32px" width="32px"> </a>
      <a href="#movil4"> <img src="img/contac.png" height="32px" width="32px"> </a>
    </div>

    <div class="main">
      <div id="movil1" class="movil-1">

      </div>
      <div id="movil2" class="movil-2">
        <?php
        $nostros = new nosotros;
        $nostros->Informacion();
        ?>
      </div>
      <div id="movil3" class="movil-3">
        <?php
        $open = new sistema;
        $open->botones();
        ?>
      </div>
      <div id="movil4" class="movil-4">
        <div class="container">
          <?php
          $cont = new formulario;
          $cont->Contacto();
          ?>
        </div>
      </div>
    </div>


  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="js/jquery-3.3.1.slim.min.js"></script>
  <script src="js/all.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>

</html>