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
                <div class="title">Aula 09</div>
            </div>
            <div class="terminal-content">

            <?php

                $a = isset($_GET["ano"])?$_GET["ano"]:1900;
                $i = date("Y") - $a;
                echo "Você nasceu em $a e tem $i anos. <br/>";
                if($i >= 18) {
                    $v = "já pode votar";
                    $d = "já pode dirigir";
                }

                else {
                    $v = "não pode votar";
                    $d = "não pode dirigir";
                }
                echo "Com essa idade você $v e também $d";
            ?>
            </div>
        </div>
    </body>
</html>
