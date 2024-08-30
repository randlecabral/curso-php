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
                <div class="title">Aula 19</div>
            </div>
            <div class="terminal-content">
                <pre>
                <?php
                    $v = array (2=> "A", 5=>"J", 0=>"M", 3=>"X", 4=>"K");
                    print_r($v);
                    //sort($v);
                    //print_r($v);

                    ksort($v);
                    print_r($v);
                ?>
                </pre>
            </div>
        </div>
    </body>
</html> 