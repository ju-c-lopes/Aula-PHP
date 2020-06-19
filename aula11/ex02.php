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
        $c = 1;
        while ($c <= 5){
            $n = "num".$c;
            $u = "v".$c;
            $$n = isset($_GET["v$c"])?$_GET["v$c"]:0;
            $c++;
        }
        //echo "$num1 $num2 $num3 $num4 $num5";

        $c = 1;
        while ($c <= 5){
            $n = "num".$c;
            echo "Valor $c:  <span class='foco'>". $$n."</span><br/>";
            $c++;
        }
    ?>
    <a href="exercicio02.php"><img src="_css/back.png" class="bt" alt="Voltar"></a>
</div>
</body>
</html>