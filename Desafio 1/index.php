<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <h1>Resultado</h1>

  <?php 

 
    //var_dump($_GET);
    $Number = $_GET["Numero"] ;
    echo "<p>O número escolhido foi $Number</p>" ;
    $Ante = $Number - 1;
    echo "<p>O seu antecessor é $Ante </p>";//$ante é . "($number - 1)." \n";
    $Sucessor = $Number + 1;
    echo "<p>O seu sucessor é $Sucessor</p>";//$suce é . "($number + 1)." \n";
    ?>
  <p><a href="javascript:history.go(-1)">Voltar uma pagina</a></p>
</body>

</html>