<?php
header('Content-Type: text/html; charset=utf-8');

require_once('ConectaBD.php');

$nome = $_POST['nome'];
$pront  = $_POST['pront'];
$curso  = $_POST['curso'];
$end = $_POST['end'];
$cid = $_POST['cid'];
$estado = $_POST['estado'];
$telFix = $_POST['telFX'];
$telCel = $_POST['telCel'];
$mail = $_POST['mail'];
  $sql = "UPDATE aluno 
          SET nome  = '$nome', curso = '$curso', endereco = '$end',
		  cidade = '$cid', estado = '$estado', telefone = '$telFix', celular = '$telCel', email = '$mail'
          WHERE prontuario = $pront";
  $total = $dbh->exec($sql);
?>
<!DOCTYPE html>
<html>
  <head>
	  <title>Listar</title>
	  <meta charset="utf-8">
  </head>
  <body>
    <?php
      require_once('busca.php');
      echo "<p><c><font face=\"Verdana\" color=\"#FF0000\">Atualização Realizada!</font></c></p>";
    ?>
  </body>
</html>