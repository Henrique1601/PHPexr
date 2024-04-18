<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style1.css">
</head>
<body>
  <h1> Conversor de Moedas com API </h1>

  <?php 
  $inicio = date("m-d-Y", strtotime("-7 days")); //faz menos tatos dias

  $fim = date("m-d-Y");

  $url ='https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$inicio.'\'&@dataFinalCotacao=\''.$fim.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao' ;
  
  $resposta = json_decode(file_get_contents($url), true);// se for false vai virar objeto true é array
  
  // var_dump($resposta);
  
  $cotacao = $resposta ["value"] [0] ["cotacaoCompra"] ;


  $Converter = $_REQUEST["Real"] ?? 0;

  $dolar = $Converter/$cotacao ;
  
  $padrao = numfmt_create("pt_BR" , NumberFormatter::CURRENCY); //outro jeito de formatar os numeros 
  
  echo " Seus " . numfmt_format_currency ($padrao ,  $Converter , "BRL" ) .      numfmt_format_currency ($padrao ,  $dolar , "USD");  //" equivalem a US$ " . number_format($dolar, 2 )

  ?>
  <form action="index.php" method="get">

  <label for="Real"></label>
  <input type="number" name="Real" />

  <input type="submit" value="Converter" />
</form>

</body>
</html>