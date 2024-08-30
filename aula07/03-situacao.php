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
               $nota1 = $_GET["n1"];
               $nota2 = $_GET["n2"];
               $m = ($nota1+$nota2)/2;
               echo "A media entre $nota1 e $nota2 é $m <br/>";
               $sit = ($m<6)? "REPROVADO":"APROVADO";
               echo "A situação do aluno é $sit";

               //exemplo concatenado 
               //echo "A media entre $nota1 e $nota2 é $m <br/>";
               //echo "A situação do aluno é " . (($m<6)? "REPROVADO":"APROVADO);
            ?>
        </div>
    </div>
</body>
</html>
