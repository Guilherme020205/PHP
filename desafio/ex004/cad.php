<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>

<body>
    <?php

    $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'10-28-2023\'&@dataFinalCotacao=\'11-01-2023\'&$top=100&$format=json&$select=cotacaoCompra,cotacaoVenda,dataHoraCotacao';

    $dados = json_decode(file_get_contents($url), true);


    $cotacao = $dados["value"][0]["cotacaoCompra"];

    $num = $_GET["num"];

    $numDolar = $num / $cotacao;

    $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
    //echo "Seu valor em dolar é \$". number_format($numDolar, 2, ",", ".");
    echo "Seu valor em dolar é " . numfmt_format_currency($padrao, $numDolar, "BRL");


    ?>
    <p><a href="javascript:history.go(-1)">Voltar a tela anterior</a></p>

</body>

</html>