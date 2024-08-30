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
                    $p = "Leite";
                    $pr = 4.5;
                    //echo "O $p custa R$ $pr";
                    //echo "O $p custa R$ " . number_format($pr,2);
                    printf ("O %s custa R$ %.2f", $p, $pr); 
                ?>
            </div>
        </div>
    </body>
</html> 