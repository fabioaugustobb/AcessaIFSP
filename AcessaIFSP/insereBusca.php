<?php
require_once('navBar.php');
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
  <p>Busca rápida:</p>            
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Nome</th>
        <th>Prontuario</th>
        <th>Telefone Fixo:</th>
      </tr>
    </thead>
    <tbody>
      <tr>
         <?php
         $pront = $_POST['var']; 
         switch ($pront) {
             case is_numeric($pront):
                 foreach ($dbh->query("SELECT * FROM aluno where prontuario = $pront") as $linha) {
                  echo "<td>";
                  echo "{$linha['nome']}" ;
                  echo "</td>";
                  
                  echo "<td>";
                  echo "{$linha['prontuario']}";
                  echo "</td>";

                  echo "<td>";
                  echo "{$linha['celular']}";
                  echo "</td>";
                  
              }
                 break;
             case is_string($pront):
                 foreach ($dbh->query("SELECT * FROM aluno where nome like '$pront'") as $linha) {
                  
                  echo "<td>";
                  echo "{$linha['nome']}" ;
                  echo "</td>";
                  
                  echo "<td>";
                  echo "{$linha['prontuario']}";
                  echo "</td>";

                  echo "<td>";
                  echo "{$linha['celular']}";
                  echo "</td>";
                  
                  }
                  
                 break;
         }
         ?>                     
      </tr>
    </tbody>
  </table>
</div>

</body>
</html>
