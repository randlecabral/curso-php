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
                <div class="title">Aula 12</div>
            </div>
            <div class="terminal-content">
                <?php
                    $c = 0;
                    do {
                        echo "$c ";
                        $c+=2;
                    } while($c <= 20); 

                    //se fosse uma contagem regressiva
                    /*
                       $c = 10;
                        do {
                            echo "$c ";
                            $c--;
                        } while($c >= 1);
                    */       

                ?>
            </div>
        </div>
    </body>
</html>