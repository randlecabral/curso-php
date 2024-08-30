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
                <div class="title">Aula 15</div>
            </div>
            <div class="terminal-content">
                <?php
                    function teste(&$x) {
                        $x += 2;
                        echo "<p>O valor de X é $x</p>";
                    }

                    $a =3;
                    teste($a);
                    echo "<p>O valor de A é $a</p>"
                ?>
            </div>
        </div>
    </body>
</html>