<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Super Globais</h1>
  <main>
    <pre> <!--Arruma as arrays -->
      <?php 
      setcookie("dia-da-semana" , "segunda");
      echo " <p> Oi  </p> ";
      var_dump($_COOKIE);
      
      session_start();
      $_SESSION ["teste"] = "Funciona";

      echo " OIOI env";
      var_dump($_ENV);  
    foreach (getenv() as $c => $v) {
    echo " <br> $c - $v ";
  }
      echo "GET";
        var_dump($_GET);
        
        echo "<h1> Oi </h1>";
        var_dump($_REQUEST) ;
        
        echo "<p>Server</p> ";
        var_dump($_SERVER);

        echo "<p>Global</p>";
        var_dump($GLOBALS);
      ?>
    </pre>
  </main>
</body>
</html>