<!doctype html>
<html lang="en">
  <head>
  <?php 
include('head.php')
?>
  </head>
  <body>
<header>
<?php $mi_pagina="multiverso";
?>
<?php 
include('header.php')
?>
</header>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="Imagenes/multiverso/mig2.png" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="Imagenes/multiverso/mig3.png" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="Imagenes/multiverso/mig1.png" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="Imagenes/multiverso/hdc1.png" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="Imagenes/multiverso/hdc2.png" alt="Second slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<h5 style="text-align: center;">Creditos a <a href="https://www.instagram.com/_.photos._2003/" target="_blank">Patricia</a> y a <a href="https://www.instagram.com/xaival.photo/" target="_blank">Xaival</a> por las fotos</a>


<?php 
include('footer.php')
?>
  </body>
</html>