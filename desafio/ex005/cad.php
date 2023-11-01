<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <main>
        <h1>Analisando</h1>
        <?php
        $num = $_POST["numero"] ?? 0;
        echo "<p>Analisando o número <strong>" . number_format($num, 3, ",", ".") . "</strong> informado pelo usuário</p>";

        $int = (int)$num;
        $fra = $num - $int;
        echo "<ul>
        <li>Sua parte inteira é: <strong>" . number_format($int, 0, ",", ".") . "</strong></li>
        <li>Sua parte fracionária é: <strong>" . number_format($fra, 3, ",", ".") . "</strong></li>
        </ul>"
        ?>
        <p><a href="javascript:history.go(-1)">Voltar a tela anterior</a></p>

    </main>
</body>

</html>