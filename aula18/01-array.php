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
        <table border="1"><tr>
    <?php
       $n = array(3,5,8,2);
       $n[] = 7;
       print_r($n);

       $c = range(5,20,2); // ("começa" 5, "termina" 20, "passo" 2)
       //print_r($c);

       foreach ($c as $v){
           echo "<td>$v ";
       }
    ?>
        </table>
    </pre>

</div>
</body>
</html>