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
                    include "funcoes.php";
                    // include "funcoes2.php"; //apresentará alguns avisos
                    // require "funcoes2.php"; //erro fatal e nenhum comando feito  
                    echo "<h1>Testando novas funcoes</h1>";
                    ola();
                    mostraValor(4);
                    echo "<h2>Finalizando Programa...</h2>";
                ?>
            </div>
        </div>
    </body>
</html> 