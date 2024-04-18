<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  
  <?php 
  $Converter = $_GET["Real"];
  
  $divisao = $Converter / 4.80 ;

  $padrao = numfmt_create("pt_BR" , NumberFormatter::CURRENCY); //outro jeito de formatar os numeros 
  
  echo " Seus " . numfmt_format_currency($padrao , $Converter, "BRL").  " equivalem a US$ " . number_format($divisao,2 )// numfmt_format_currency($padrao , $divisao, "USD");
  ?>
  <form action="index.php" method="get">

      <label for="Real"></label>
      <input type="number" name="Real" />

      <input type="submit" value="Converter" />
  </form>
  
</body>
</html>