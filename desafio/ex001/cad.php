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
        $numD = $num + 1;
        $numA = $num - 1;
        
        echo "Seu número é $num, o sucessor dele é $numD, e seu antecessor é $numA"


        ?>
        <p><a href="javascript:history.go(-1)">Voltar a tela anterior</a></p>

 </body>

 </html>