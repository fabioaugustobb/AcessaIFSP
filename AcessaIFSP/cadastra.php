<!DOCTYPE html>
<?php
require_once('navBar.php');
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
  <form class="form-horizontal" role="form" name="Cadastro" action="insereCadastro.php" method="post" >
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Nome:</label>
      <div class="col-sm-10">
          <input class="form-control" type="text" name="nome"  placeholder="Insira seu Nome"/>
      </div>
    </div>
      
      
      
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Prontuario:</label>
      <div class="col-sm-10">          
        <input class="form-control" type="number" name="pront" placeholder="Insira seu Prontuario">
      </div>
    </div>

      
      <div class="form-group">
          <label class="control-label col-sm-2" for="pwd">Curso:</label>
          <div class="col-sm-10">          
              <input class="form-control" type="text" name="curso" placeholder="Insira o Curso">
          </div>
      </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Endereço:</label>
      <div class="col-sm-10">          
          <input class="form-control" type="text" name="end" placeholder="Insira o Endereço">
      </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Cidade:</label>
      <div class="col-sm-10">          
          <input class="form-control" type="text" name="cid" placeholder="Insira a Cidade">
      </div>
    </div>      

    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Estado:</label>
      <div class="col-sm-10">          
          <input class="form-control" type="text" name="estado" placeholder="Insira o Estado">
      </div>
    </div>   
      
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Telefone Fixo:</label>
      <div class="col-sm-10">          
          <input class="form-control" type="number" name="telFX" placeholder="Insira o Telefone Fixo">
      </div>
    </div>         
      
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Telefone Celular:</label>
      <div class="col-sm-10">          
          <input class="form-control" type="number" name="telCel" placeholder="Insira o Celular">
      </div>
    </div>         
      
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">E-Mail:</label>
      <div class="col-sm-10">          
          <input class="form-control" type="text" name="mail" placeholder="Insira a Cidade">
      </div>
    </div>         
      
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Submit</button>
      </div>
    </div>
  </form>
</div>

</body>
</html>



