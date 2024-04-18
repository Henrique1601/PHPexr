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

  <label for="1valor">1º Valor</label>
  <input type="number" name="1valor" id="">

  <label for="1peso">1º Peso </label>
  <input type="number" name="1peso" id="">

  <label for="2valor">2º Valor</label>
  <input type="number" name="2valor" id="">

  <label for="2peso">2º Peso</label>
  <input type="number" name="2peso" id="">
  
  <input type="submit" value="Calcular Médias">
  
  </form>
  <?php 
    $Pegando1 = $_REQUEST["1valor"] ?? '';
    $Pegando2 = $_REQUEST["2valor"] ?? '';

    $Peso1 = $_REQUEST["1peso"] ?? '';
    $Peso2 = $_REQUEST["2peso"] ?? '';

    $Simples = ($Pegando1 + $Pegando2) / 2 ?? '';
    $Ponderada = ($Pegando1 * $Peso1 + $Pegando2 * $Peso2) / ($Peso1 + $Peso2);

    echo "   <h1>Cálculo das Médias </h1>
    <p> Analisando os valores $Pegando1 e $Pegando2:</p>
    <ul>
      <li>
      A Média Aritmética Simples entre os valores é igual a ". number_format($Simples,2). "
    </li>
      <li>
      A Média Aritmética Ponderada com pesos $Peso1 e $Peso2 é igual a " . number_format($Ponderada, 2)."
      </li>
    </ul>   
    ";
  ?>
  </main>
</body>
</html>