<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <main>

    <form action="index.php" method="get">
      <h1>Calculadora de Tempo</h1>
      <label for="Sec">Qual é o total de segundos?</label>
      <input type="number" name="Sec" id="">
      <input type="submit" value="Calcular">
    </form>

  <?php 
    $Sec = $_REQUEST["Sec"]?? 0;
    $sobra = $Sec;

    $Semanas = (int) ($sobra / 604800) ;
    $sobra = $sobra % 604800;

    $Dias =(int)($sobra / 86400) ;
    $sobra = $sobra % 86400;

    $Horas =(int)($sobra / 3600) ;
    $sobra = $sobra % 3600;

    $Min = (int)($sobra / 60) ;
    $sobra = $sobra % 60;

    
    $sobra = $sobra ;

    $Mili =(int)($sobra * 1000);
    $sobra = $sobra % 1000;

    echo "<h1>Totalizando tudo </h1> ";
    echo "<p>Analisando o valor que você digitou, $Sec segundos equivalem a um total de: </p>";

    echo "  
    <ul>
    <li> $Semanas semanas</li>
    <li> $Dias dias</li>
    <li> $Horas horas</li>
    <li> $Min minutos</li>
    <li> $sobra segundos</li>
    <li> $Mili milissegundos</li>
    </ul>";
    ?>

  </main>
</body>
</html>