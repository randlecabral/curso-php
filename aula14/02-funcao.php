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
                <div class="title">Aula 14</div>
            </div>
            <div class="terminal-content">
                <?php

                   function soma ($a, $b) {
                    $s = $a + $b;
                    //return $s;
                    return $a+$b;
                   }

                   $x = 3;
                   $y = 4;
                   $r = soma ($x, $y);
                   echo "A soma entre $x e $y é igual a $r";
                ?>
            </div>
        </div>
    </body>
</html>