<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="/curso-php/assets/css/style.css">
        <title>Exercícios de PHP</title>
    </head>
    <body>
        <div class="terminal-window">
            <div class="terminal-header">
                <div class="buttons">
                    <div class="button close"></div>
                    <div class="button minimize"></div>
                    <div class="button maximize"></div>
                </div>
                <div class="title">Aula 12</div>
            </div>
            <div class="terminal-content">
                <?php
                    $v = isset ($_GET["val"])?$_GET["val"]:1;
                    echo "<h1>Calculando o fatorial de $v</h1>";
                    $c = $v;
                    $fat = 1;
                    do {
                        $fat = $fat * $c;
                        $c--;
                    } while ($c >= 1);
                    echo "<h2>$v! = $fat</h2>"
                ?>
                <a href="02-index.html" class="botao">Voltar</a>
            </div>
        </div>
    </body>
</html>