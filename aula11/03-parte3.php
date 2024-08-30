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
                <div class="title">Aula 11</div>
            </div>
            <div class="terminal-content">
                <?php
                    $i = 1;
                    while ($i <= 5) {
                        $v = "num".$i;
                        $url = "v". $i;     
                        $$v = isset($_GET[$url]) ? $_GET[$url] : 0;
                        $i++;
                    }
                echo "$num1 $num2 $num3 $num4 $num5";
                ?>
            </div>
        </div>
    </body>
</html>