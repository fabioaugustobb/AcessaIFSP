<?php
require_once('ConectaBD.php');
?>

<!DOCTYPE html>
<html lang="en">
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
  <h2>AcessaIFSP</h2>
             
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Nome</th>
        <th>Prontuario</th>
        <th>Curso:</th>
		<th>Horário de Acesso:</th>
      </tr>
    </thead>
    <tbody>
      <tr>
         <?php
		 /*
		$dbh->query("SELECT * FROM aluno A INNER JOIN registro R ON A.prontuario = R.dado 
				 WHERE R.dado = (SELECT dado FROM registro ORDER BY id DESC LIMIT 1);");
        //$resultado = mysql_query($dbh);
		//$total = mysql_result($dbh, 0, 'Total');
		//echo $dbh;
		if ($dbh > 0) {		 
		while ($linha = mysql_fetch_array($dbh)) {
            $return.= "<td>" . utf8_encode($linha["nome"]) . "</td>";
            $return.= "<td>" . utf8_encode($linha["curso"]) . "</td>";
            $return.= "<td>" . utf8_encode($linha["celular"]) . "</td>";
            $return.= "<td>" . utf8_encode($linha["hora"]) . "</td>";
            $return.= "</tr>";
        }
        echo $return.="</tbody></table>";
    } else {
        // Se a consulta não retornar nenhum valor, exibi mensagem para o usuário
        echo "Não foram encontrados registros!";
    }*/

                 foreach ($dbh->query("select a.prontuario, a.nome,a.curso, r.hora
									   from aluno as a inner join registro as r on a.prontuario = r.dado
                                       ORDER BY r.id DESC LIMIT 1") as $linha) {
                  echo "<td>";
                  echo "{$linha['nome']}" ;
                  echo "</td>";
                  
                  echo "<td>";
                  echo "{$linha['prontuario']}";
                  echo "</td>";

                  echo "<td>";
                  echo "{$linha['curso']}";
                  echo "</td>";
				  echo "<td>";
                  echo "{$linha['hora']}";
                  echo "</td>";
                  
              }
			  
		 
?>                     
      </tr>
    </tbody>
  </table>
</div>

</body>
</html>