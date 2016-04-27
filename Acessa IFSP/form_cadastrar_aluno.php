<?php
	require_once('../connection.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>
	<form role="form" action="cadastrar_aluno.php" method="post">
		<div class="form-group">
			<label for="prontuario">Prontuario</label>
			<input type="numeric" name="prontuario" id="prontuario" class="form-control" required />
		</div>
		<div class="form-group">
			<label for="nome">Nome</label>
			<input type="text" name="nome" id="nome" class="form-control" required />
		</div>			
		<div class="form-group">
			<label for="curso">Curso</label>
			<input type="text" name="curso" id="curso" class="form-control" required />
		</div>	
		<div class="form-group">
			<label for="end">Endereço</label>
			<input type="text" name="end" id="end" class="form-control" required />
		</div>
		<div class="form-group">
			<label for="cidade">Cidade</label>
			<input type="text" name="cidade" id="cidade" class="form-control" required />
		</div>
		<div class="form-group">
			<label for="telefone">Telefone</label>
			<input type="numeric" name="telefone" id="telefone" class="form-control" required />
		</div>
		<div class="form-group">
			<label for="celular">Celular</label>
			<input type="numeric" name="celular" id="celular" class="form-control" required />
		</div>
		<div class="form-group">
			<label for="email">E-mail</label>
			<input type="text" name="email" id="email" class="form-control" required />
		</div>
		<div class="form-group">
			<label for="foto">Foto</label>
			<input type="text" name="foto" id="foto" class="form-control" required />
		</div>
		
		<button type="submit" class="btn btn-default">Submit</button>			
	</form>
</body>
</html>