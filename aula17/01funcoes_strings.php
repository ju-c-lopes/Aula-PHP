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
        /* Função strtolower($string) -> coloca uma string com todas as letras em minúsculas */

        $nome = "juliAno Lopes";
        $nome2 = strtolower($nome);
        echo "Seu nome é $nome2<br/>";

        /* Função strtoupper($string) -> coloca uma string com todas as letras em maiúsculas */
        $nome2 = strtoupper($nome);
        echo "<br/>Seu nome é $nome2";

        /* Função ucfirst -> coloca a primeira letra da string em maiúscula
           OBS: se tiver alguma outra letra dentro da string em maiúscula, ela será mantida
                esta função só coloca unicamente a primeira letra da string */
        echo"<br/><br/>";
        $nome2 = strtolower($nome);
        $n1 = ucfirst($nome);
        echo "<br/>Seu nome é $n1";

        /* Função ucwords */
        echo"<br/><br/>";
        $n1 = ucwords(strtolower($nome));
        echo "<br/>Seu nome é $n1";

        /* Função strrev -> transcreve a string de trás pra frente */
        echo"<br/><br/>";
        print(strrev($n1));
        echo"<br/><br/>";

        /* Função strpos -> informa em qual posição a string indicada está */
        $frase = "Estou aprendendo PHP";
        $pos = strpos($frase, "PHP");
        echo "$frase<br/>";
        echo "A string foi encontrada na posição $pos";

        /* Função stripos -> informa em qual posição a string indicada está, mesmo sendo em maiúscula ou minuscula */
        $frase = "Estou aprendendo PHP";
        $pos = stripos($frase, "php");
        echo "<br/>$frase<br/>";
        echo "A string foi encontrada na posição $pos";

        /* Função substr_count -> conta quantas vezes uma palavra indicada foi encontrada na string*/
        $frase = "Estou aprendendo PHP no Curso em Video de PHP";
        $cont = substr_count($frase, "PHP");
        print("<br/>PHP encontrado $cont vezes<br/>");

        /* Função substr -> fatia a string com parametro ($variavel, 0, 5) onde 0 é começo, e o 5 tamanho a partir do começo
           se não indicarmos o tamanho final, ele vai mostrar o restante da string
           Se usarmos o parametro começo com nro negativo ex:($var, -5, 2) ele começará
           pelas ultimas 5 letras da string até o tamanho indicado (no ex, as 2 letras seguiintes)  */

        $site = "Curso em Vídeo";
        $sub = substr($site,-6,4);
        echo"<br/>$sub ";
?>
</div>
</body>
</html>