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
                <div class="title">Aula 10</div>
            </div>
            <div class="terminal-content">
                <?php
                    $d = isset($_GET["ds"])?$_GET["ds"]:0;
                    switch ($d) {
                        case 2:
                        case 3:
                        case 4:
                        case 5:
                        case 6:
                            echo "Levanta e vai estudar!";
                            break;
                        case 7:
                        case 8:
                            echo "Descanse!";
                            break; 
                        default:
                            echo "Dia da semana invalido";       
                    }
                ?>
            <br/><a href="javascript:history.go(-1)" class="botao">Voltar</a>
            </div>
        </div>
    </body>
</html>
