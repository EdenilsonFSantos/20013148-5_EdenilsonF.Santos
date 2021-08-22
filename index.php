<html>
<head>
<meta content="text/html; charset=UTF-8" http-equiv="Content-Type"/>
    <link rel="stylesheet" type="text/css" href="pages/js/Glider/glider.css">   
    <link rel="stylesheet" type="text/css" href="pages/css/style.css">
    <script type="text/javascript" src="pages/js/Glider/glider.min.js"></script>
    <script type="text/javascript" src="pages/js/script.js"></script>
    <title>Home</title>
</head>
<body>
<script src="glider.js"></script>

<!-- MENUS - CABECALHO   -->
<?php
	require 'pages/cabecalho.php';
?>

<article class="c-carousel">
  <div class="c-carousel__slides">
    <article class="c-carousel__slide">1</article>
    <article class="c-carousel__slide">2</article>
    <article class="c-carousel__slide">3</article>
    <article class="c-carousel__slide">4</article>
    <article class="c-carousel__slide">5</article>
    <article class="c-carousel__slide">6</article>
  </div>

  <button aria-label="Anterior">«</button>
  <button aria-label="Próximo">»</button>
  <div role="tablist"></div>
</article>

<!-- RODAPÉ   -->
<footer>
<?php
	require 'pages/rodape.php';
?>
</footer>

</body>
</html>

