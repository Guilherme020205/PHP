<pre>
    <?php
        $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'10-28-2023\'&@dataFinalCotacao=\'11-01-2023\'&$top=100&$format=json&$select=cotacaoCompra,cotacaoVenda,dataHoraCotacao';

        $dados = json_decode(file_get_contents($url), true);

        
        $cotacao = $dados["value"][0]["cotacaoCompra"];

        echo "A cotação foi $cotacao";
        ?>

</pre>