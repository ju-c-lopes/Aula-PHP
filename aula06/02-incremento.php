<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <?php
        /* Exercidio de operadores de incremento e decremento*/
        $atual = $_GET["aa"]; # linha que pega ano no url
        echo "O ano atual é $atual e o ano anterior é ".--$atual;
    ?>
</div>
</body>
</html>
