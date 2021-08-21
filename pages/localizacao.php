<html>
<head>
<meta content="text/html; charset=UTF-8" http-equiv="Content-Type"/>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script type="text/javascript" src="js/script.js"></script>
    <title>Localização</title>
</head>
<body>

<!-- MENUS - CABECALHO   -->
<?php
	require 'cabecalho.php';

// TESTAR SE TEM INTERNET - para mostrar mapa interativo
$server = 'www.google.com'; //endereço sem o HTTP:// ou HTTPS://
$port = "80"; // Mude o número da porta se quiser testar outros serviços.

// Verifica o status atual do servidor.
$current_status =  ping($server, $port, 5);

// mostrar mapa
if ($current_status == "down"): 
    echo ('<img src="images/mapa_estatico.jpg" align="left"></a>');
else: 
    echo ('<iframe class="maps" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d49259.37108732504!2d-51.94376325530995!3d-23.41625027532075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1spt-BR!2sbr!4v1629510111594!5m2!1spt-BR!2sbr" align="left"></iframe>');
endif;


function ping($host, $port, $timeout)
{ 
  $tB = microtime(true); 
  $fP = fSockOpen($host, $port, $errno, $errstr, $timeout);
  if (!$fP) { return "down"; } 
  $tA = microtime(true); 
  //return round((($tA - $tB) * 1000), 0)." ms"; 
} 

?>

<br>
<p class="maps">
&nbsp&nbsp Estamos Localizados no Catuaí Shopping<br>
&nbsp&nbsp Na Cidade de Maringá - PR
</p>

<!-- RODAPÉ   -->
<footer>
<?php
	require 'rodape.php';
?>
</footer>
</body>
</html>