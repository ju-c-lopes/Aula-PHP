<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <?php
        /* include "arquivo.php" -> inclui funções externas de outro aquivo
           OBS: esta opção tenta executar todo script independente do arquivo existir ou não

           require "arquivo php" -> assim como o include, inclui funções externas de outro aquivo,
           mas se o arquivo não existir, ele para o script, pois depende do arquivo para continuar */
        require "funcoes.php";
        echo "<h1>Testando novas funções</h1>";
        ola();
        mostraValor(4);
        echo "<h2>Finalizando Programa...</h2>";
    ?>
</div>
</body>
</html>