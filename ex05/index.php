<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resultado</title>
  <link rel="stylesheet" href="index.css">
</head>

<body>
  <h1>Resultado</h1>
  <main>
    </ <?php 
        //var_dump($_GET);
      $nome = $_GET["Nome_completo"] ??"sem nome";
      $Idade = $_GET["Idade"] ??"sem";
      $nascimento = $_GET["nascimento"];
      echo "<p> Seu acesso foi concedido <br>$nome <br> $Idade <br> $nacsimento" ;
  
?> <p><a href="javascript:history.go(-1)">Voltar uma pagina</a></p>
  </main>
</body>

</html>