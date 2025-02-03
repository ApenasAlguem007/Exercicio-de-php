<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores de Comparação</title>
</head>
<body>

<h1> Operadores de Comparação </h1>

    <?php 
    
        $a = 10;
        $b = "10";
    
            echo "<br> <h2> Comparação de Igualdade </h2>";

            echo ( $a == $b ) ? "São iguais. " : " Não são iguais ";
            echo "<br>";
            echo ( $a === $b ) ? " São estritamente iguais." : " Não são estritamente iguais.";

            echo "<br> <h1> Comparação de Diferença </h1>";

            echo ( $a != $b ) ? " São diferentes.": " São Iguais.";
            echo "<br>";
            echo ( $a !== $b ) ? " São estritamente diferentes.": " São estritamente iguais.";

            

            $teste = false;

            echo "<br>  <h2> Negação </h2>";
            echo (!$teste) ? "É verdadeiro." : " É falso.";



            $c = 5;
            $d = 3;

            echo "<br> <h2> Maior que e Menor que </h2>";
            echo ( $c > $d ) ? " C é Maior que D.": " C não é Maior que D.";
            echo "<br>";
            echo ( $c < $d ) ? "C é Menor que D.": "C não é Menor que D.";


            $e = 5;
            $f = 5;
            $g = 3;

            echo "<br> <h2> Maior ou igual a, Menor ou igual a </h2>";
            echo ( $e >= $f ) ? " E é maior ou igual a F." : " E não é maior ou igual a F.";
            echo "<br>";
            echo ( $e <= $g ) ? " E é menor ou igual a G.": " E não é menor ou igual a G.";


    ?>





</body>
</html>