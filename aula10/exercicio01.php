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
                <div class="title">Aula 10</div>
            </div>
            <div class="terminal-content">
                <?php
                    $n = isset($_GET["num"])?$_GET["num"]:0;
                    $o = isset($_GET["oper"])?$_GET["oper"]:1;
                    switch ($o) {
                        case 1:
                            $r = $n * 2;
                            break;
                        case 2:
                            $r = $n ^ 3;
                            break;
                        case 3:
                            $r = sqrt($n); // $n ^ (1/2);
                    }
                    echo "O resultado da operação solicitada foi $r";
                ?>
            <a href="exercicio01.html" class="botao">Voltar</a>
            </div>
        </div>
    </body>
</html>
