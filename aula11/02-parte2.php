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
                <div class="title">Aula 11</div>
            </div>
            <div class="terminal-content">
                    <form method="get" action="03-parte3.php">  
                        <?php
                            $c = 1;
                            while ($c <= 5) {
                                echo "Valor $c: <input type='number' name='v$c' max='100' min='0' value='0'/><br/>";
                                $c++;
                            }
                        ?>
                        <input type="submit" class="botao" value="Enviar"/>
                    </form>
            </div>
        </div>
    </body>
</html>