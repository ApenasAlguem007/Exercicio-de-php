<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores aritméticos</title>
</head>
<body>
    <h1>Operadores aritméticos</h1>
    <?php
    $soma = 20 + 20 ;
    $subtração = 10 - 5 ;
    $divisão = 5 / 2 ;
    $resto = 5 % 2 ;
    $multiplicação = 5 * 3;
    $potenciação = 2 ** 3;
    $porcentagem = 100 / 100 * 50 ;
 
    echo "Resultado da soma é $soma <br>";
    echo "Resultado da subtração é $subtração <br>";
    echo "Resultado da divisão é $divisão" ;
    echo " já o resto é $resto <br>";
    echo "Resultado da multiplicação é $multiplicação <br>";
    echo "Resultado da potenciação é $potenciação <br>";
    echo "Resultado da porcentagem $porcentagem";
 
    /* ordem de grandeza
    primeiro = () parenteses
    segundo = potenciação
    terceiro = multiplicação
    quarto = divisão
    quinto = soma
    sexto = subtração
    */ 
 
    //Primeira expressão: (3 + 2) * 4
    $valor1 = (3 + 2) * 4;

   //segunda expressão (2 * (2+ (2- 1))) + 8
   $valor2 = (2 * (2 + (2 - 1))) + 8 * 2;

   $a = 3;
   $b = 2;
   $c = 4;
   $calculo = ($a + $b) * $c;
   
    // Exibindo os resultados - concatenação
    echo "Resultado da primeira expressão: " . $valor1 . "<br>";
    echo "Resultado da segunda expressão: " . $valor2 . "<br>";
    echo "Resultado do cálculo das variáves" . $calculo ."<br>";
    ?>
   
</body>
</html>