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
            <div class="title">Aula 07</div>
        </div>
        <div class="terminal-content">
            
            <?php
                $n1 = $_GET["a"];
                $n2 = $_GET["b"];
                $tipo = $_GET["op"];
                echo "Os valores passados foram $n1 e $n2 <br/>";
                $r = ($tipo == "s") ? $n1+$n2 : $n1*$n2;
                echo "O resultado será $r";
            ?>
            
        </div>
    </div>
</body>
</html>
