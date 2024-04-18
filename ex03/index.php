<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1>PHP</h1>
  <?php 
    date_default_timezone_set("America/Sao_Paulo");
    echo " Hoje é dia " . date("d/m/Y");
    echo " e as horas " . date("G:i:s");
  
  ?>
</body>

</html>