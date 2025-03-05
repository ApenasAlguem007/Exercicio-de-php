<!DOCTYPE html>
<html lang="pt-br
<head>
    <meta charset=" UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Conditional IF, Else e Elseif</title>
    </head>

    <body>
        <h2> Conditional IF, Else e Elseif </h2>

        <?php

        // conditional if 
        // declarando dentro da condição

        if (1 < 2) {
            echo " O numero 1 é menor <br>";
        }



        // declarando fora 

        $idade = 16;

        if ($idade >= 18) {
            echo " você é maior de idade";
        }
        echo "<br>";



        // conditional else

        $a = 10;
        $b = 14;

        if ($a == $b) {
            echo "as variaveis são iguais"; //se 
        } else {
            echo "as variaveis são diferentes."; //se não
        }

        // else = se não; sempre.
        echo "<br>";



    // conditional ElseIf

$idadepessoa = 25;

if($idadepessoa < 13){
    echo " Você é uma criança.";

}else if ($idadepessoa >= 13 && $idadepessoa <= 19) {

    echo "Você é um adolescente.";

}else if ($idadepessoa >= 20 && $idadepessoa <= 59) {
    
    echo " Você é um adulto.";

} else {

    echo " Você é um idoso.";

}







        ?>




    </body>

</html>
