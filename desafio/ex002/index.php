<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio</title>
</head>

<body>
    <?php
    define("INFERIOR", 0);
    define("SUPERIOR", 100);
    $numero = rand(INFERIOR, SUPERIOR);
    echo $numero . "<br>";
    ?>
    <p><a href="javascript:history.go(0)">Atualizar</a></p>

</body>

</html>