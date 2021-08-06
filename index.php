<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="shortcut icon" href="img/oferve.png" type="image/x-icon">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/estilo.css">
</head>

<body>
  <?php include "php/contacto.php";
  include "php/open.php";  ?>

  <div class="d-none d-sm-block">
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

      </div>
      <div id="section3" class="slider-3">
        <?php
        $open = new sistema;
        $open->botones();
        ?>
      </div>
      <!-- formulario de contacto -->
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


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="js/jquery-3.3.1.slim.min.js"></script>
  <script src="js/all.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>

</html>