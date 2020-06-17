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
        /* variável de variável, ou,
        variável de variantes:

        a segunda variável (com 2 '$'s) recebe como nome da variável, o valor da primeira variável
        a imagem salva no projeto exemplifica o conceito*/
        $x = "abc";
        $$x = "def";
        echo "O conteudo da variável X é $x";
        echo "<br/>A variável criada recebeu o valor de $abc"
    ?>
</div>
</body>
</html>
