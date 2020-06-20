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
        $n = isset($_GET["num"])?$_GET["num"]:1;
        $c = 0;

        echo "<h1>Analisando o número $n ...</h1>";
        echo "Valores Múltiplos: ";
        for ($i = 1; $i <= $n; $i++){
            $r = $n % $i;
            if ($r === 0){
                if ($i != $n){
                    echo " $i,";
                }else{
                    echo " $i</br></br>";
                }
                $c++;
            }
        }

        echo "Total de múltiplos: $c";

        if ($c === 2){
            echo "<h3>Resultado: $n <span class='foco'>É PRIMO</span></h3>";
        }
        else{
            echo "<h3>Resultado: $n <span class='foco'>NÃO É PRIMO</span></h3>";
        }
    ?>
    <br/><a href="03-primo.html"><button class="bt"><img src="_css/back.png" alt="Voltar"/></button></a>
</div>
</body>
</html>