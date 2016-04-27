<?php
	require_once('../connection.php');

	$prontuario        	= $_POST['prontuario'];
	$nome              	= $_POST['nome'];
	$curso             	= $_POST['curso'];
	$end       		   	= $_POST['end'];
	$cidade 			= $_POST['cidade'];
	$telefone 			= $_POST['telefone'];
	$celular 			= $_POST['celular'];
	$email 				= $_POST['email'];
	$foto 				= $_POST['foto'];
	

	$sth = $dbh->prepare('INSERT INTO aluno
		                    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)'
		                  );
	try{
		$sth->execute([$prontuario, $nome, $curso, $end, $cidade, $telefone
		, $celular, $email, $foto]);
	}catch(PDOException $e) {
		echo $e->getMessage();
	}
	
	$sth1 = $dbh->prepare('INSERT INTO historico
		                    VALUES (?, ?, ?, ?)'
		                  );
	try{
		$sth->execute([$id, $prontuario, 'Cadastro', $hora]);
	}catch(PDOException $e) {
		echo $e->getMessage();
	}