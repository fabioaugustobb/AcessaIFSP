<?php
require_once('navBar.php');
require_once('ConectaBD.php');
?>

<?php

$portAddress = 'COM4';
exec("mode com4: BAUD=9600 PARITY=N data=8 stop=1 xon=off");

echo("<h1>Temperatura Via Arduino</h1>");

echo("<p>Conectando, aguarde...");
$port = fopen($portAddress, 'w+');
if (!$port) {
    echo "<br /> Nao foi possivel conectar-se a porta $portAddress";
} else {
    echo "<br /> Conectado com sucesso a porta $portAddress";
}
echo("</p>");

sleep(3);
fwrite($port, 't');

sleep(9);
echo fgets($port);
fclose($port);
?>