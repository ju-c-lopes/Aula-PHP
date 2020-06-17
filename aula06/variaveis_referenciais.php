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
        echo "Primeiro exemplo: <br/>";
        $a = 3;
        $b = $a;
        $b += 5;
        echo "<br/>A variável A vale = $a";
        echo "<br/>A variável B vale = $b";
        echo "<br/><br/>";
        echo "Segundo exemplo: <br/>";
        $a = 3;
        $b = &$a; //variavel referencial com (&)
        $b += 5;
        echo "<br/>A variável A vale = $a";
        echo "<br/>A variável B vale = $b";
    ?>
</div>
</body>
</html>
