<?php

header('Content-Type: text/html; charset=utf-8');
require_once('ConectaBD.php');
require_once('navBar.php');
$nome = $_POST['nome'];
$pront  = $_POST['pront'];
$curso  = $_POST['curso'];
$end = $_POST['end'];
$cid = $_POST['cid'];
$estado = $_POST['estado'];
$telFix = $_POST['telFX'];
$telCel = $_POST['telCel'];
$mail = $_POST['mail'];


$dbh->exec("INSERT INTO aluno(prontuario,nome,curso,endereco,cidade,estado,telefone,celular,email,foto) VALUES ($pront,'$nome','$curso','$end','$cid','$estado',$telFix,$telCel,'$mail','')");

?>

<div class="alert alert-success">
  <strong>Cadastro efetuado!</strong> O IFSP agradece.
</div>