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
        $est = $_GET["op"];

        switch ($est){
            case "ES":
            case "MG":
            case "RJ":
            case "SP":
                $reg = "Região Sudeste";
                echo "Você mora na <span class='foco'>$reg</span>";
                break;
            case "PR":
            case "RS":
            case "SC":
                $reg = "Região Sul";
                echo "Você mora na <span class='foco'>$reg</span>";
                break;
            case "DF":
            case "GO":
            case "MT":
            case "MS":
                $reg = "Região Centro-Oeste";
                echo "Você mora na <span class='foco'>$reg</span>";
                break;
            case "AC":
            case "AP":
            case "AM":
            case "PA":
            case "RO":
            case "RR":
            case "TO":
                $reg = "Região Norte";
                echo "Você mora na <span class='foco'>$reg</span>";
                break;
            case "AL":
            case "BA":
            case "CE":
            case "MA":
            case "PB":
            case "PE":
            case "PI":
            case "RN":
            case "SE":
                $reg = "Região Nordeste";
                echo "Você mora na <span class='foco'>$reg</span>";
        }
    ?>
    <br/><a href="exercicio03.html"><img src="_css/back.png" id="bt"/></a>
</div>
</body>
</html>