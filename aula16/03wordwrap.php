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
        // Exemplo wordwrap:

        $txt = "Este é um exemplo de string com texto gigante que vai mostrar o funcionamento da função wordwrap";
        $res = wordwrap($txt, 35, "<br/>\n");
        echo("$res\n<br/><br/>");

        // Exemplo strlen($t):

        $t = "Curso em Vídeo";
        $tam = strlen($t);
        echo ("string = $t, tamanho da string = $tam<br/><br/><br/>");

        // Exemplo função trim: -> remove espaços em uma string

        /* Exemplo trim:
        $nome = "   José da Silva    ";
        echo ($nome);
        echo "<br/>";
        echo(strlen($nome));
        echo "<br/>";
        $novo = trim($nome);
        echo($novo);
        echo "<br/>";
        echo(strlen($novo));*/

        /* Exemplo ltrim, rtrim -> (left trim)(right trim) */
        $nome = "   José da Silva    ";
        echo "Função trim, ltrim, rtrim:<br/> $nome";
        echo "<br/>";
        echo(strlen($nome));
        echo "<br/>";
        $novo = ltrim($nome);
        $novo1 = rtrim($nome);
        echo($novo);
        echo "<br/>";
        echo(strlen($novo)." ". strlen($novo1));

        /* Função str_word_count: mostra a qtd de palavras de uma string
           Parametro: 0 -> conta as palavras
           Parametro: 1 -> retorna um array com indice e valor separado por palavras (usar print_r mostrará o array)
           Parametro: 2 -> retorna um array com indice separado por letras, mostrando a posição de inicio de cada palavra
        */
        $frase = "Eu vou estudar PHP";
        $cont = str_word_count($frase, 0);
        echo "<br/><br/><br/>$frase";
        echo "<br/>Função str_word_count <br/>";
        print_r($cont);

        /* Função explode */

        $site = "Curso em Vídeo";
        $vetor = explode(" ",$site); // explode(" ", $variavel) (" ") -> caractere de separação, depois, string que vai explodir
        echo "<br/><br/>Função explode<br/>";
        print_r($vetor);

        /* Função str_split */

        $n = "Maria";
        $vet = str_split($n);
        echo "<br/><br/>Função str_split<br/>"; // separa uma string em array indexado por letras
        print_r($vet);

        /* Função implode */

        $vt[0] = "Curso";
        $vt[1] = "em";
        $vt[2] = "Vídeo";
        $texto = implode(" ", $vt); // junta os indices de um array para uma string, grudando a string pelo delimitador (" ") como no exemplo
        echo "<br/><br/>Função implode<br/>";
        print($texto);

        /* Função join() -> Funciona da mesma maneira que a função implode */

        /* Função chr */

        $letra = chr(67); // retorna a letra a partir do código ascii
        echo "<br/><br/>";
        echo "A letra de codigo 67 é $letra";

        // Função ord - > contrário da função chr
        $l = "C";
        $cod = ord("$l");
        echo "<br/><br/>";
        echo "A letra de $l é o código ascii $cod";
    ?>
</div>
</body>
</html>