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
        /* Função print_r:

        Útil durante periodo de testes
        mostra a saida de vetores com indice e associação
        */
        $v[0] = 4;
        $v[1] = 8;
        $v[2] = 3;
        print_r($v);
        echo "<br/>";

        $v2 = array(3, 7, 6, 2, 1, 9);
        print_r($v2); //  saída => Array ( [0] => 3 [1] => 7 [2] => 6 [3] => 2 [4] => 1 [5] => 9 )
        //var_dump($v2);  saída => array(6) { [0]=> int(3) [1]=> int(7) [2]=> int(6)
                            //    [3]=> int(2) [4]=> int(1) [5]=> int(9) }
        //var_export($v2);  saída => array ( 0 => 3, 1 => 7, 2 => 6, 3 => 2, 4 => 1, 5 => 9, )
    ?>
</div>
</body>
</html>