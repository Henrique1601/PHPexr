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
  $preco = $_REQUEST['preco'] ?? '0';
  $reaj = $_REQUEST['reaj'] ?? '0';
?>

  <main>

  <h1>Reajustador de Preços </h1>

<form action="index.php" method="get">
  <label for="preco">Preço do Produto</label>
  <input type="number" name="preco" min="0.10" step="0.01" value="<?$preco?>">

  <label for="reaj">Qual sera o porcentual do reajuste? (<span id="p">?%</span>)</label>
  <input type="range" name="reaj" min="0" max="100" step="1" oninput="mudaValor()" value="<?$reaj ?>">

  <input type="submit" value="Reajustar">
</form>
  </main>

  <?php 
    $aumento = $preco * $reaj / 100 ;
    $novo = $preco + $aumento;
  
  ?>
  <section>
  <h2>Resultado do Reajuste</h2>
  <p>O produto que custava R$<?$preco?>, com o <?$reaj?> de aumento vai passar a custar R$ <?$novo?> a partir de agora.</p>
  </section>

  <script>
    mudaValor()

    function mudaValor() {
    p.innerText = reaj.value;
    }
  </script>
</body>
</html>