<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laço For e Foreach</title>
</head>
<body>
    
    <h2> Laço For e Foreach </h2>


    <?php 

    echo "<br> For <br>";

    // laço do tipo For. Podemos declarar uma variavel dentro ou fora do laço. 

    $i = 1;

    // imprime o valor de $i e pula para a próxima linha. 

    echo "<br>";

    for ($i = 1; $i <= 5; $i++ ){
        echo $i . "<br>";

        }

        echo "<br>";

    for ( $a = 1;
    $a <= 5; $a++){
        echo "O quadrado de $a é " . ($a * $a) . "<br>";

        }


        echo "<br>";
        echo "<br>";

        echo "<br> Foreach <br>";

        echo "<br>";

        $frutas = ["Maçã", "Banana", "Laranja", "Uva"];

        // Imprime o nome de cada fruta:

            foreach($frutas as $fruta){
                echo $fruta . "<br>"; 

        }


    ?>



</body>
</html>