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
        $a = 3;
        $b = "3";
        $r = ($a == $b)?"SIM":"NÃO";
        echo "As variáveis A e B são iguail: $r<br/>";
        $r = ($a === $b)?"SIM":"NÃO"; # outra linguagem não reconheceria igualdade, no PHP reconhece
        echo "As variáveis A e B são iguail: $r";
        /* Operador == mostra se elas são 'iguais', independente do tipo,
        o operador === mostra se são iguais e do mesmo tipo*/
    ?>
</div>
</body>
</html>
