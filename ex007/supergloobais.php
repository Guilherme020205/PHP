<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <pre>
            <?php 
                setcookie("dia-da-semana", "SEGUNDA", time() + 3600);

                session_start();
                $_SESSION["Teste"] = "FUNCIONOU";

                echo "<h1>Superglobal Get</h1>";
                var_dump($_GET);

                echo "<h1>Superglobal Post</h1>";
                var_dump($_POST);

                echo "<h1>Superglobal Request</h1>";
                var_dump($_REQUEST);

                echo "<h1>Superglobal Cookie</h1>";
                var_dump($_COOKIE);

                echo "<h1>Superglobal Session</h1>";
                var_dump($_SESSION);
            ?>
        </pre>
    </main>
</body>
</html> 