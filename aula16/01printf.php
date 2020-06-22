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
        /* Parametros função printf:

        %d -> valor decimal(positivo ou negativo)
        %u -> valor decimal sem sinal (apenas positivos)
        %f -> valor real
        %s -> string
        entre outros...
        */

        $prod = "leite";
        $preco = 4.5;
        printf("O %s está custando R$ %.2f<br/>", $prod, $preco);
        //echo "O $prod custa R$ ".number_format($preco, 2);
    ?>
</div>
</body>
</html>