<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <pre>
    <?php
        $x = 4;
        $y = &$x;
        $z = ++ $y;
        echo "X=$x Y=$y Z=$z";
    ?>
    </pre>
</div>
</body>
</html>