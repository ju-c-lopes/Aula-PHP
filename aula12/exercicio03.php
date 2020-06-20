<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <form method="get" action='exercicio03tab.php'>
        <label for="num">Número: </label>
            <select name="tab" id="num">
        <?php
            $n = 1;
            $s = "1";
            while ($n <= 10){
                //echo "value= "."$n"." $n ";
                echo "<option value='$n'>$n</option><br/>";
                $n++;
            }
        ?>
            </select><br/>
        <input type="submit" class="botao" value="Tabuada"/>
    </form>

<!--
//    $n = 1;
//    $s = "1";
//    while ($n <= 10){
//        echo "value= "."$n"." $n ";
//        //echo "<option value='$n'>$n</option>";
//        $n++;
//    }
//-->
</div>
</body>
</html>