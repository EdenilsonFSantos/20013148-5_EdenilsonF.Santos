<html>
<head>
<meta content="text/html; charset=UTF-8" http-equiv="Content-Type"/>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
    <style>h1{Font-family: 'Sofia';font-size: 22px; text-align: center;}</style>
    <script type="text/javascript" src="js/script.js"></script>
    <title>Contato</title>
</head>
<body class='fundoindex'>

<!-- MENUS - CABECALHO   -->
<?php
	require 'cabecalho.php';
?>

<h1> Doces Caseiros Ltda </h1>

<div class="contato">
  <div style="text-align:center">
    <h2>Entre em contato</h2>
    <p>Passe por aqui para tomar um café ou deixe-nos uma mensagem:</p>
  </div>
  <div class="ro">
    <div class="col">
      <img src="images/shopping.jpg" style="width:100%">
      <p class='zap' style="width:100%"><img src="images/whats.jpg" style="width:140px; Height:60px"><br><br>&nbsp&nbsp&nbsp(44)&nbsp99831-5555</p>
    </div>
    <div class="col">
      <form action="http://localhost/20013148-5_EdenilsonF.Santos/index.php">
        <label for="fname">Seu Nome</label>
        <input type="text" id="fname" name="firstname" placeholder="Seu nome..">
        <label for="email">Seu Email</label>
        <input type="text" id="email" name="mail" placeholder="Seu email..">

        <label for="subject">Assunto</label>
        <textarea id="subject" name="subject" placeholder="Escreva uma mensagem.." style="height:170px"></textarea>
        <input type="submit" value="Enviar">
      </form>
    </div>
  </div>
</div>


<!-- RODAPÉ   -->
<footer>
<?php
	require 'rodape.php';
?>
</footer>
</body>
</html>