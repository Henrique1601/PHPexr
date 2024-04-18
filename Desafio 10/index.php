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
    <h1>Calculando sua idade</h1>
    <form action="index.php" method="get">

      <label for="AnoNa">Em que ano você nasceu?</label>
      <input type="number" name="AnoNa" id="" min="1900" max="<?=($atual-1) ?>">

      <label for="Qano" id="Qano">Quer saber sua idade em que ano?()</label>
      <input type="number" name="Qano" id="">

      <input type="submit" value="Qual será minha idade?">
    </form>
    <?php 
     $atual = date("Y");
      $AnoDeNascimento = $_REQUEST["AnoNa"]?? '2002';
      $Ano = $_REQUEST["Qano"]?? $atual;

      $Calculando =  $Ano - $AnoDeNascimento ;
      
      if($AnoDeNascimento <= $Ano){
        echo " Não é possível ter essa idade";
      }else($AnoDeNascimento >= $Ano );
      echo " Quem nasceu em $AnoDeNascimento vai ter $Calculando anos em $Ano" ;
    
     
    ?>
    <script >
    </script>
  </main>
</body>
</html>