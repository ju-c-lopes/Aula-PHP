<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <form method='get' action='ex02.php'>
    <?php
        $s = 1;
        while ($s <= 5){
           echo "Valor $s: <input type='number' name='v$s' max='100' min='0' value='0'/><br/>";
            $s++;
        }
    ?>
        <input type='submit' value='Enviar' class='botao'/>
    </form>
</div>
</body>
</html>