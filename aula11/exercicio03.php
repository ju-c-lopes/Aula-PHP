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
        $i = $_GET["inicio"];
        $f = $_GET["fim"];
        $passo = $_GET["inc"];
        $v = false;

        if ($i > $f){
            while ($i >= $f){
                echo $i." ";
                $i -= $passo;
            }
        }
        else{
            while ($i <= $f){
                echo $i." ";
                $i += $passo;
            }
        }
    ?>
    <br/><a href="exercicio03.html"><button class="bt"><img src="_css/back.png"/></button></a>
</div>
</body>
</html>