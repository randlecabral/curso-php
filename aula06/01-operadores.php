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
                /*
                    $preco = $_GET["p"];
                    echo "O preço do produto é R$ $preco";
                    //utilizado para aumento
                    $preco += $preco*10/100;
                    echo "<br/> E o novo preço com 10% de aumento será R$ $preco";
                */

                /*
                    $preco = $_GET["p"];
                    echo "O preço do produto é R$ $preco";
                    //utilizado para desconto
                    $preco -= $preco*10/100;
                    echo "<br/> E o novo preço com 10% de desconto será R$ $preco";
                */
                    $preco = $_GET["p"];
                    echo "O preço do produto é R$ " . number_format($preco, 2);
                    //utilizado para aumento
                    $preco += $preco*10/100;
                    echo "<br/> E o novo preço com 10% de aumento será R$ " . number_format($preco, 2);
                
                    //parametro usado http://localhost/curso-php/aula06/01-operadores.php?p=1000
            ?>
            
        </div>
    </div>
</body>
</html>
