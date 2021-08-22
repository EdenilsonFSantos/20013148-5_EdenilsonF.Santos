<html>
<head>
<meta content="text/html; charset=UTF-8" http-equiv="Content-Type"/>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script type="text/javascript" src="js/script.js"></script>
    <title></title>
</head>
<body>

<!-- FUNCOES   -->
<?php
ini_set('display_errors', '0');


function carrega_mapa()
{
  // TESTAR URL do MAPA - para mostrar mapa interativo
  $server = 'www.google.com'; //endereço sem o HTTP:// ou HTTPS://
  $port = "80"; // Mude o número da porta se quiser testar outros serviços.

  // Verifica o status atual do servidor.
  $current_status =  ping($server, $port, 5);

  //-- MOSTRAR MAPA do GOOGGLE --//
  if ($current_status == "down"): 
    echo ('<img class="maps" src="images/mapa_estatico.jpg" align="left">
        <p class="textomapa">&nbsp&nbsp Estamos Localizados no Catuaí Shopping<br>
        &nbsp&nbsp Na Cidade de Maringá - PR</p>');
  else: 
    echo ('<iframe class="maps" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d49259.37108732504!2d-51.94376325530995!3d-23.41625027532075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1spt-BR!2sbr!4v1629510111594!5m2!1spt-BR!2sbr" align="left">      
        </iframe><p class="textomapa">
        &nbsp&nbsp Estamos Localizados no Catuaí Shopping<br>
        &nbsp&nbsp Na Cidade de Maringá - PR</p>');
  endif;

}

function ping($host, $port, $timeout)
{ 
  $tB = microtime(true); 
  $fP = fSockOpen($host, $port, $errno, $errstr, $timeout);
  if (!$fP) { return "down"; } 
  $tA = microtime(true); 
  return round((($tA - $tB) * 1000), 0)." ms"; 
} 






?>



</body>
</html>