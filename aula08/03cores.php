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
                <div class="title">Aula 08</div>
            </div>
            <div class="terminal-content">
            <?php
                $txt = isset($_GET["t"])?$_GET["t"]:"Texto Generico"; 
                $tam = isset($_GET["tam"])?$_GET["tam"]:"12pt";
                $cor = isset($_GET["cor"])?$_GET["cor"]:"#000000";
                echo "<span style='font-size:$tam; color:$cor;'>$txt</span>";
            ?>
            </div>
        </div>
    </body>
</html>
