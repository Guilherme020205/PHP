<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <header>
        <h1>Resultado</h1>
    </header> 
    <main>
        <?php 
        $nome = $_GET["nome"] ?? 'null';
        $sobrenome = $_GET["sobrenome"] ?? 'null';

        echo "<p>Muito prazer</p> <strong> $nome $sobrenome </strong>";
        ?>
        <p><a href="javascript:history.go(-1)">Voltar a tela anterior</a></p>
    </main>
</body>
</html>