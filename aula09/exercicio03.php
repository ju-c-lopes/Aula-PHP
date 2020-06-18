<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title>Curso de PHP - CursoemVideo.com</title>
    <style>
        #voltar {
            color: #ffffff;
            background: #1a074f;
            padding: 5px;
            box-shadow: 4px 4px 4px rgba(0,0,0,.5);
        }
        span {
            color: #4f1e13;
            font-weight: bold ;
        }
    </style>
</head>
<body>
<div>
    <?php
        $n1 = $_GET["n1"];
        $n2 = $_GET["n2"];

        if (empty($n1) && empty($n2)){
            $n1 = 0;
            $n2 = 0;
        }
        else if(empty($n1)){
            $n1 = 0;
        }
        else if(empty($n2)){
            $n2 = 0;
        }


        if($n1 > 10 || $n2 > 10){
            echo "A nota deve ser de 0 a 10";
            $o = true;
        }else{
            $o = false;
        }


        $m = ($n1 + $n2)/2;


        if ($o == false){
            if($m >= 7){
                $sit = "APROVADO";
            }
            elseif($m >= 5 && $m < 7) {
                $sit = "RECUPERAÇÃO";
            }
            else {
                $sit = "REPROVADO";
            }
        echo "A média entre <span>".number_format($n1, 1)."</span> 
            e <span>".number_format($n2, 1)."</span> 
            é igual a <span>".number_format($m, 1)."</span>";
        echo "<br/>Situação do aluno: <span>$sit</span>";
        }
    ?> <br/>
    <a href="exercicio03.html" id="voltar">Voltar</a>
</div>
</body>
</html>