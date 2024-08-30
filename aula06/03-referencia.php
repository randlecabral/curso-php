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
                $a = 3;
                //$b = $a;
                $b = &$a; //& = referencia B a variavel A
                $b += 5;
                echo "A variavel A vale $a";
                echo "<br/>A variavel B vale $b";
            ?>
            
        </div>
    </div>
</body>
</html>
