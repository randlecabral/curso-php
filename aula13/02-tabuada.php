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
                <div class="title">Aula 13</div>
            </div>
            <div class="terminal-content">
                        <?php
                           $n = isset($_GET["num"])?$_GET["num"]:1;
                           for ($c=1; $c<=10; $c++) {
                            $r = $n * $c;
                            echo "$n x $c = $r <br/>";
                           } 
                        ?>
                        <br/><a href="javascript:history.go(-1)" class="botao">Voltar</a>
            </div>
        </div>
    </body>
</html>