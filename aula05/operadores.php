<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="/curso-php/assets/css/style.css">
    <title>Operadores</title>
</head>
<body>
    <div class="terminal-window">
        <div class="terminal-header">
            <div class="buttons">
                <div class="button close"></div>
                <div class="button minimize"></div>
                <div class="button maximize"></div>
            </div>
            <div class="title">Aula 05</div>
        </div>
        <div class="terminal-content">
<?php
    $n1 = 3;
    $n2 = 2;
    echo "A soma vale ". ($n1+$n2); 
    echo "<br/>A subtração vale ". ($n1-$n2); 
    echo "<br/>A multiplicação vale ". ($n1*$n2); 
    echo "<br/>A divisão vale ". ($n1/$n2); 
    echo "<br/>O módulo vale ". ($n1%$n2); 
?>
        </div>
    </div>
</body>
</html>
