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
      <h1>Informe um número</h1>
      <label for="Numero">Número</label>
      <input type="number" name="Numero" id="">
      <input type="submit" value="Calcular raízes">
    </form>
   
    <?php 
      $PegandoNumero = $_REQUEST["Numero"]??0;

      $RaizQuad = sqrt($PegandoNumero);  
      $RaizCub = pow($PegandoNumero, 1/3) ;

      echo "<h1>Resultado final</h1>";
      echo " <p> Analisando o número $PegandoNumero , temos: </p>
      <ul>
        <li>
        <p> A sua raiz quadrada é ". number_format($RaizQuad,2) .  "</p>
        </li>
        <li>
        <p> A sua raiz cubica é ". number_format($RaizCub,2). "  </p>
        </li>
      </ul>   
      "
    ?>

  </main>
</body>
</html>