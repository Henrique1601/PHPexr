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
      <label for="Sacar">Qual valor você deseja sacar? (R$)</label>
      <input type="number" name="Sacar" id="" step="2,5" >

      <p>Notas disponíveis: R$100 R$50 R$10 R$5 </p>

      <input type="submit" value="Sacar">
     
    </form>
    <?php 
      $N = $_REQUEST["Sacar"];
      $sobra = $N ; 

      $N100 = floor($sobra / 100) ;
      $sobra = $sobra % 100 ; //$resto %= 100 

      $N50 = floor($sobra / 50)  ;
      $sobra %= 50;

      $n10 = floor($sobra / 10 ) ;
      $sobra %= 10 ;

      $n5 = floor($sobra / 5) ;
      $sobra %=  5 ;

      $n2 = floor($sobra / 2);
      $sobra %= 2 ; 

      echo " 
      <ul>
      <li>$N100 notas de R$100</li>
      <li>$N50 notas de R$50</li>
      <li>$n10 notas de R$10</li>
      <li>$n5 notas de R$5</li>
      <li>$n2 notas de R$2</li>
    </ul> "
    ?>
  </main>
</body>
</html>