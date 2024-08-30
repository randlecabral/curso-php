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
            <div class="title">Aula 06</div>
        </div>
        <div class="terminal-content">
            
            <?php
                $atual = $_GET["aa"]; //essa linha vai pegar o ano pela URL
                echo "O ano atual é $atual e o ano anterior é " . --$atual;
            ?>
            
        </div>
    </div>
</body>
</html>
