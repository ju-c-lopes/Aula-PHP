<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title>Curso de PHP - CursoemVideo.com</title>
</head>
<div>
<body>
    <?php
        $preco = $_GET["p"];
        echo "O preço do produto é R$ ".number_format($preco, 2);
        $preco += $preco*10/100;
        echo "<br/>O novo preço com 10% de aumento será R$ ".number_format($preco, 2);
    ?>
</div>
</body>
</html>
