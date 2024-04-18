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
    <h1>Analisador de Numero real </h1>
    <?php 
     
     $numero = $_GET['n'];
     $parte_inteira = intval($numero);
     $parte_fracionada = fmod($numero, 1);
 
 
    //$num = $_GET=["n"] ?? 0.000 ; 
    echo "<ul><li> A Parte inteira do numero é " . $parte_inteira ."</ul> </li>";
    echo " <ul><li> A Parte fracionada do numero é : ". number_format($parte_fracionada ,3). "</ul> </li>"  ;
    //echo " <p> Analisando o numero " . number_format((int)$num, 3 , ","  , "."). " informado pelo usuário: </p> " ;
    
    //$int = (int) $num;
    //$fra = fmod($num , 1); 
    
  //echo "<ul> <li> A parte interia do numero é" .number_format($int, 3, "," ,  ".") . "</li> " ;
  //echo "<l1>A parte fracionaria do numero é " .number_format($fra, 3, "," ,  ".") . " </l1> </ul>";

    ?>
    <button onclick="javascritp:history.go(-1)">Voltar</button>
  </main>
</body>
</html>