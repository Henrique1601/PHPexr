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
    <h1>Anatomia de uma divisão</h1>
      <form action="index.php" method="get">
        <label for="Dividendo">Dividendo</label>
        <input type="number" name="Dividendo" id="">

        <label for="Divisor">Divisor</label>
        <input type="number" name="Divisor" id="">

        <input type="submit" value="Analisar">
      </form>

    <?php 
      $Dividendo = $_GET["Dividendo"] ?? 0;
      $Divisor = $_GET["Divisor"] ?? 1;

      $Dividindo = $Dividendo % $Divisor ; //Resto
      $Resultado = intdiv($Dividendo, $Divisor); //$Dividendo / $Divisor;
    ?>
  </main> 
<table class="divisao">
  <tr>
    <td><?=$Dividendo ?></td>
    <td><?=$Divisor ?></td>
  </tr>
  <tr>
    <td><?=$Dividindo ?></td>
    <td><?=$Resultado ?></td>
  </tr>
</table>
  <section>
   <?php 

      // echo "<h2>Estrura da Divisão </h2><ul>"; 
      // echo "<li>Dividendo: $Dividendo </li>";
      // echo "<li>Divisor: $Divisor</li>";
      //echo "<li>Resto: $Dividindo </li>";
      //echo "<li>Quociente: $Resultado</li>";
      // echo "</ul>";
    ?>

  </section>

</body>
</html>