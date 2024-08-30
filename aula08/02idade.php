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
            
                /*
                    $nome = $_GET["nome"];
                    $ano = $_GET["ano"];
                    $sexo = $_GET["sexo"];
                    $idade = date("Y") - $ano;
                    echo "$nome é $sexo e tem $idade anos.";
                */
                
                // resolvendo problema de forma paleativa que permite voce voltar ao formulario
                $nome = isset($_GET["nome"])?$_GET["nome"]:"[nao informado]";
                $ano = isset($_GET["ano"])?$_GET["ano"]:0;
                $sexo = isset($_GET["sexo"])?$_GET["sexo"]:"[sem sexo]";
                $idade = date("Y") - $ano;
                echo "$nome é $sexo e tem $idade anos."; 
            ?>

            <a href="02-exercicio.html" class="botao">Voltar</a>

        </div>
    </div>
</body>
</html>
