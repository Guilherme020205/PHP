<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos Primitivos no PHP</title>
</head>

<body>
    <h1>Tipos Primitivos no PHP</h1>

    <?php
    $numero = 300;
    $baseNumerica = 0x1A;
    $nome = "Guilherme";
    $booleaninho = true;

    echo "O valor de número é $numero";
    echo "<br>";
    var_dump($numero);
    echo "<br>";
    echo "O valor da base numerica é $baseNumerica";
    echo "<br>";
    var_dump($baseNumerica);
    echo "<br>";
    echo "Seu nome é $nome";
    echo "<br>";
    var_dump($nome);
    echo "<br>";
    echo "Seu valor é $booleaninho";
    echo "<br>";
    var_dump($booleaninho);


    ?>

</body>

</html>