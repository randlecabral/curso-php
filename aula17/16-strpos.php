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
                <div class="title">Aula 17</div>
            </div>
            <div class="terminal-content">
                <?php
                    $frase = "Estou aprendendo PHP";
                    $pos = strpos ($frase, "PHP");
                    echo "$frase <br/>A string foi encontrada na posição $pos";
                ?>
            </div>
        </div>
    </body>
</html> 