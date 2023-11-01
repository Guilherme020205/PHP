<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vendo aspas</title>
</head>
<body>
    <?php 
    $meuNome = "Guilherme";
    const ESTADO = "Santa Catarina";

    echo "Olá me chamo $meuNome \u{1F604}";
    echo "<br>";    
    echo 'Olá me chamo $meuNome \u{1F604}';
    echo "<br>";
    echo "Moro em ESTADO";
    echo "<br>";
    echo "Moro em " . ESTADO;
    echo "<br>";
    echo "Moro em " . ESTADO;
    echo "<br>";
    echo "Estamos em " . date('Y');
    echo "<br>";
    echo $meuNome . ' "Programador" Seemann ';
    echo "<br>";
    echo  "$meuNome \"Programador\" Seemann" ;

    ?>
    
</body>
</html>