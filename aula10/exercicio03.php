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
                    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
                        $estado = isset($_GET['estado']) ? $_GET['estado'] : '[não informado]';

                        $regioes = [
                            'Norte' => ['AC', 'AP', 'AM', 'PA', 'RO', 'RR', 'TO'],
                            'Nordeste' => ['AL', 'BA', 'CE', 'MA', 'PB', 'PE', 'PI', 'RN', 'SE'],
                            'Centro-Oeste' => ['DF', 'GO', 'MT', 'MS'],
                            'Sudeste' => ['ES', 'MG', 'RJ', 'SP'],
                            'Sul' => ['PR', 'RS', 'SC']
                        ];

                        $nomeEstado = '[não informado]';
                        $regiao = '[não definida]';

                        switch ($estado) {
                            case 'AC': $nomeEstado = 'Acre'; $regiao = 'Norte'; 
                            break;
                            case 'AL': $nomeEstado = 'Alagoas'; $regiao = 'Nordeste'; 
                            break;
                            case 'AP': $nomeEstado = 'Amapá'; $regiao = 'Norte'; 
                            break;
                            case 'AM': $nomeEstado = 'Amazonas'; $regiao = 'Norte'; 
                            break;
                            case 'BA': $nomeEstado = 'Bahia'; $regiao = 'Nordeste'; 
                            break;
                            case 'CE': $nomeEstado = 'Ceará'; $regiao = 'Nordeste'; 
                            break;
                            case 'DF': $nomeEstado = 'Distrito Federal'; $regiao = 'Centro-Oeste'; 
                            break;
                            case 'ES': $nomeEstado = 'Espírito Santo'; $regiao = 'Sudeste'; 
                            break;
                            case 'GO': $nomeEstado = 'Goiás'; $regiao = 'Centro-Oeste'; 
                            break;
                            case 'MA': $nomeEstado = 'Maranhão'; $regiao = 'Nordeste'; 
                            break;
                            case 'MT': $nomeEstado = 'Mato Grosso'; $regiao = 'Centro-Oeste'; 
                            break;
                            case 'MS': $nomeEstado = 'Mato Grosso do Sul'; $regiao = 'Centro-Oeste'; 
                            break;
                            case 'MG': $nomeEstado = 'Minas Gerais'; $regiao = 'Sudeste'; 
                            break;
                            case 'PA': $nomeEstado = 'Pará'; $regiao = 'Norte'; 
                            break;
                            case 'PB': $nomeEstado = 'Paraíba'; $regiao = 'Nordeste'; 
                            break;
                            case 'PR': $nomeEstado = 'Paraná'; $regiao = 'Sul'; 
                            break;
                            case 'PE': $nomeEstado = 'Pernambuco'; $regiao = 'Nordeste'; 
                            break;
                            case 'PI': $nomeEstado = 'Piauí'; $regiao = 'Nordeste'; 
                            break;
                            case 'RJ': $nomeEstado = 'Rio de Janeiro'; $regiao = 'Sudeste'; 
                            break;
                            case 'RN': $nomeEstado = 'Rio Grande do Norte'; $regiao = 'Nordeste'; 
                            break;
                            case 'RS': $nomeEstado = 'Rio Grande do Sul'; $regiao = 'Sul'; 
                            break;
                            case 'RO': $nomeEstado = 'Rondônia'; $regiao = 'Norte'; 
                            break;
                            case 'RR': $nomeEstado = 'Roraima'; $regiao = 'Norte'; 
                            break;
                            case 'SC': $nomeEstado = 'Santa Catarina'; $regiao = 'Sul'; 
                            break;
                            case 'SP': $nomeEstado = 'São Paulo'; $regiao = 'Sudeste'; 
                            break;
                            case 'SE': $nomeEstado = 'Sergipe'; $regiao = 'Nordeste'; 
                            break;
                            case 'TO': $nomeEstado = 'Tocantins'; $regiao = 'Norte'; 
                            break;

                            default:
                            echo "Estado inválido";
                            $nomeEstado = '[não informado]';
                            $regiao = '[não definida]';
                            break;
                        }
                        echo "Você mora na Região $regiao";
                    }
                ?>
                <br/><a href="javascript:history.go(-1)" class="botao">Voltar</a>
            </div>
        </div>
    </body>
</html>
