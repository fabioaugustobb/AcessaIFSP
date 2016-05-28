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
  <h2>Hover Rows</h2>
  <p>The .table-hover class enables a hover state on table rows:</p>            
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
          if ( is_int ($_POST['var'] == true ) ) {
              $pront = $_POST['var'];
              foreach ($dbh->query("SELECT * FROM aluno where prontuario = $pront") as $linha) {
                  echo "<td>";
                  echo "{$linha['nome']}" ;
                  echo "</td>";
                  
                  echo "<td>";
                  echo "{$linha['pront']}";
                  echo "</td>";


                  echo "<td>";
                  echo "{$linha['telFX']}";
                  echo "</td>";
              }
          } else {
              $nome = $_POST['var'];
          }
          ?>                       
      </tr>
    </tbody>
  </table>
</div>

</body>
</html>
