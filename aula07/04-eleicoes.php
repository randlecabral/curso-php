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
               $ano = $_GET["an"];
               $idade = 2024 - $ano;
               echo "Quem nasceu em $ano tem idade de $idade anos.";
               $tipo = ($idade>=18 && $idade<64)? "OBRIGATÓRIO":"NÃO OBRIGATÓRIO";
               echo " Dessa forma seu voto é $tipo";
            ?>
        </div>
    </div>
</body>
</html>
