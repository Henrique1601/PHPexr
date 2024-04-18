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
      <h1>Informe seu salário</h1>
      <label for="Salario">Salário</label>
      <input type="number" name="Salario" id="">
      <p>Considerando o salário  mínimo de R$1.400,00</p>
      <input type="submit" value="Calcular">
      </form>
    <?php 
    $min = 1400;
    $Salario = $_GET["Salario"] ?? $min;
    
    $Calculando = intdiv($Salario, 1400); //$Salario / 1400;
    $resto = $Salario % 1400;
    $Menos = $Salario - 1400;
    
    $padrao = numfmt_create("pt_BR" , NumberFormatter::CURRENCY);

    echo "<h1>Resultado Final</h1> 
    <p>Quem recebe um salário de " .numfmt_format_currency($padrao,$Salario, "BRL")." ganha "  . number_format($Calculando)." salários mínimos  + ". numfmt_format_currency($padrao ,$resto , "BRL") . " </p>";
    echo "Quem recebe um salário de $Salario ganha menos que um salário mínimo  $Menos "
    ?>
  </main>
</body>
</html>