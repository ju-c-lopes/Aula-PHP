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
        /* Indices Personalizados:
        $v = array( 3=>5,
                    1=>9,
                    0=>8,
                    7=>7 );
        $v[] = "E";
        unset($v[0]); // Removendo indice especifico
        print_r($v);
        */

        /* indices associativos (com string) */

        $v = array( "nome" => "Ana",
                    "idade" => 23,
                    "peso" => 65.5);
        $v["fuma"] = true;
        print_r($v);

        //Usando foreach para indices associativos
        foreach($v as $k => $c){
            echo "O campo $k possiu o conteudo $c<br/>";
        }
    ?>
    </pre>
</div>
</body>
</html>