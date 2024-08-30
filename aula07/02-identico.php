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
                $a =3;
                $b = "3";

                // igual
                //$r = ($a == $b)? "SIM":"NAO";
                //echo "As variaveis A e B são iguais? $r";
                
                // identico
                $r = ($a === $b)? "SIM":"NAO";
                echo "As variaveis A e B são identicas? $r";
            ?>
            
        </div>
    </div>
</body>
</html>
