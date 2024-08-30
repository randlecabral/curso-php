<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="/curso-php/assets/css/style.css">
    <title>Operacões Aritméticas</title>
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
                $v1 = $_GET["x"];
                $v2 = $_GET["y"];

                echo "<h2>Valores recebidos: $v1 e $v2</h2>";

                //funcão para valor absoluto: abs();
                echo "O valor absoluto de $v2 é " . abs($v2);

                //função para potenciação: pow();
                echo "<br/>O valor de $v1<sup>$v2</sup> é " . pow($v1, $v2);

                //função para raiz quadrada: sqrt();
                echo "<br/>A raiz de $v1 é " . sqrt($v1);

                //função para arredondamento: round(); 
                echo "<br/>O valor de $v2 arredondado é " . round($v2); // ceil arredonda pra cima enquanto o floor pra baixo

                //função para valor inteiro da variável: intval();
                echo "<br/>A parte inteira de $v2 é " . intval($v2);

                //função para formatação: number_format();
                echo "<br/>O valor de $v1 em moeda é R$" . number_format($v1, 2,",", ".");

                //acessar com o parãmetro: http://localhost/curso-php/aula05/funcoesaritmeticas.php?x=8&y=3.4
            ?>
        </div>
    </div>
</body>
</html>
