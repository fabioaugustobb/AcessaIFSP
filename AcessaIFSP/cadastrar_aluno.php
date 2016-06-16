<!DOCTYPE html>
<?php
header('Content-Type: text/html; charset=utf-8');
require_once('navBar.php');
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

if($pront != '' && $nome != '')	{
	
	$sth = $dbh->prepare('INSERT INTO aluno
		                    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)');
	try{
		$sth->execute([$pront, $nome, $curso, $end, $cid, $estado, $telFix,$telCel, $mail,'','']);
	}catch(PDOException $e) {
		
		echo "<p><c><font face=\"Verdana\" color=\"#FF0000\">Prontuário Já Cadastrado!</font></c></p>";
	}
}else{
	echo "<p><c><font face=\"Verdana\" color=\"#FF0000\">Preencha os campos corretamente!</font></c></p>";
}
?>
<html>
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Acessa IFSP - Cadastro Aluno </h2>
  <form class="form-horizontal" role="form" name="Cadastro" action="cadastra.php" method="post" >
         
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Novo Cadastro</button>
      </div>
    </div>
  </form>
</div>

</body>
</html>
