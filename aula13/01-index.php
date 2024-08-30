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
                    for ($i = 1; $i <= 10; $i++) {
                        echo "$i ";
                    }
                    echo "<br/>";

                    for ($i = 10; $i >= 1; $i--) {
                        echo "$i ";    
                    }

                    echo "<br/>";

                    for ($i = 0; $i <= 50; $i+=5) {
                        echo "$i ";
                    }

                    echo "<br/>";

                    for ($i = 20; $i >= 0; $i-=2) {
                        echo "$i ";
                    }
                ?>
            </div>
        </div>
    </body>
</html>