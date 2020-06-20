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
        $tab = $_GET["tab"];
        $mult = 1;
        $r = 0;
        echo "<h2>Mostrando a tabuada do $tab</h2>";
        do {
            $r = $mult * $tab;
            echo "$tab x $mult = $r <br/>";
            $mult++;
        }while($mult <= 10);
    ?>
    <p><a href="exercicio03.php"><button class="bt"><img src="_css/back.png"/></button> </a></p>
</div>
</body>
</html>