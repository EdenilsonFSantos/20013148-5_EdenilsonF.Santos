<html>
<head>
<meta content="text/html; charset=UTF-8" http-equiv="Content-Type"/>
    <link rel="stylesheet" type="text/css" href="pages/css/style.css">
    <script type="text/javascript" src="pages/js/script.js"></script>
    <title>Home</title>
</head>
<body class='fundoindex' onload="currentSlide(1)">

<!-- MENUS - CABECALHO   -->
<?php
	require 'pages/cabecalho.php';
?>
<br>
<!-- SLIDESHOW -->

<!-- Container for the image gallery -->
<div class="container">

  <!-- Full-width images with number text -->
  <div class="mySlides">
    <div class="numbertext">1 / 6</div>
      <a href="pages/docedeleite.php"><img class="center" src="pages/images/doce-de-leite-cremoso2.jpg"></a>
  </div>

  <div class="mySlides">
    <div class="numbertext">2 / 6</div>
    <a href="pages/surpresamorango.php"><img class="center" src="pages/images/Beijinho_com_Morango2.jpg"></a>
  </div>

  <div class="mySlides">
    <div class="numbertext">3 / 6</div>
    <a href="pages/doceabobora.php"><img class="center" src="pages/images/Doce-Abobora-cremoso.jpg"></a>
  </div>

  <div class="mySlides">
    <div class="numbertext">4 / 6</div>
    <a href="pages/sagudevinho.php"><img class="center" src="pages/images/doce-sagu.jpg"></a>
  </div>

  <div class="mySlides">
    <div class="numbertext">5 / 6</div>
    <a href="pages/goiabada.php"><img class="center" src="pages/images/goiabada_cremosa1.jpg"></a>
  </div>

  <div class="mySlides">
    <div class="numbertext">6 / 6</div>
    <a href="pages/cocada.php"><img class="center" src="pages/images/cocada_cremosa.jpg"></a>
  </div>

  <!-- Next and previous buttons -->
  
  <a class="prev" onclick="plusSlides(-1)" style="margin-left:auto; margin-right: 20px">&#10094;</a>
  <a class="next" onclick="plusSlides(1)" style="margin-left:auto; margin-right: 20px">&#10095;</a>

  <br>
  <!-- Image text -->
  <div class="caption-container">
    <p id="caption"></p>
  </div>

  <!-- Thumbnail images -->
  <div class="row">
    <div class="column">
      <img class="demo cursor" src="pages/images/doce-de-leite-cremoso2.jpg" style="width:100%; height:150px" onclick="currentSlide(1)" alt="DOCE DE LEITE CREMOSO">
    </div>
    <div class="column">
      <img class="demo cursor" src="pages/images/Beijinho_com_Morango2.jpg"  style="width:100%; height:150px" onclick="currentSlide(2)" alt="SURPRESA DE MORANGO">
    </div>
    <div class="column">
      <img class="demo cursor" src="pages/images/Doce-Abobora-cremoso.jpg"  style="width:100%; height:150px" onclick="currentSlide(3)" alt="DOCE DE ABÓBORA CREMOSO">
    </div>
    <div class="column">
      <img class="demo cursor" src="pages/images/doce-sagu.jpg" style="width:100%; height:150px" onclick="currentSlide(4)" alt="SAGU DE VINHO">
    </div>
    <div class="column">
      <img class="demo cursor" src="pages/images/goiabada_cremosa1.jpg" style="width:100%; height:150px" onclick="currentSlide(5)" alt="GOIABADA CREMOSA">
    </div>
    <div class="column">
      <img class="demo cursor" src="pages/images/cocada_cremosa.jpg" style="width:100%; height:150px" onclick="currentSlide(6)" alt="COCADA CREMOSA">
    </div>
  </div>
</div>

<!-- RODAPÉ   -->
<footer>
<?php
	require 'pages/rodape.php';
?>
</footer>

</body>
</html>

