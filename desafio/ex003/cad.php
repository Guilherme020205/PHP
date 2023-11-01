<!DOCTYPE html>
 <html lang="pt-br">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Resultado</title>
 </head>

 <body>
     <?php
        $num = $_GET["num"];
        $numDolar = $num / 5.03;
        
        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
        //echo "Seu valor em dolar é \$". number_format($numDolar, 2, ",", ".");
        echo "Seu valor em dolar é ". numfmt_format_currency($padrao, $numDolar, "BRL");


        ?>
        <p><a href="javascript:history.go(-1)">Voltar a tela anterior</a></p>

 </body>

 </html>