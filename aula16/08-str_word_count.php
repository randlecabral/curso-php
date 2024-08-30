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
                <div class="title">Aula 16</div>
            </div>
            <div class="terminal-content">
                <?php
                    $frase = "Eu vou estudar PHP";
                    $cont = str_word_count($frase,1);
                    print_r($cont);
                ?>
            </div>
        </div>
    </body>
</html> 