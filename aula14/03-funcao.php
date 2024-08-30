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
                    function soma() {
                        $p = func_get_args();
                        $t = func_num_args();
                        $s = 0;
                        for($i=0; $i<$t; $i++) {
                            $s += $p[$i];
                        }
                        return $s;
                    }

                    $r = soma (3,5,2);
                    echo "A soma dos valores é $r";

                ?>
            </div>
        </div>
    </body>
</html>