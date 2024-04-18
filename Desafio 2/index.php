<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <h1>Trabalhando com números aleatórios</h1>
  <p>Gerando um número aleatório entre 0 e 100</p>
  <?php
  $mi = 0;
  $ma = 500;
  
  //$rand = rand($mi, $ma);
$rand = mt_rand($mi, $ma) ; // mais rapido do rand normal
    //random_int() mais seguro do que outras opcoes mas é mais lento
  echo "Numero gerado foi $rand"
?>
<form action="index.php" method="get"> 
  <input type="submit" value="gerar" name="rand">
  </form>
<!--O mais certo seria com o botão -->
  <button onclick="javascript:document.location.reload()">Gerar</button>
</body>

</html>