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
                $valor = $_GET["v"];
                $rq = sqrt($valor);
                //echo "A raiz de $valor é igual a $rq";

                //valor concatenado
                echo "A raiz de $valor é igual a " . number_format($rq,2);
            ?>
            <a href="01-exercicio.html" class="botao">Voltar</a>    
        </div>
    </div>
</body>
</html>
