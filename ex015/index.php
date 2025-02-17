<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste de Mesa</title>
</head>
<body>
    
    <h1> Teste de Mesa </h1>

    <?php 

    $a = 10;
    $b = 5;
    $c = 3;

    $a = $a + $b; // $a = 10 + 5 = 15 ( $a agoea vale 15, não 10)
    $b = $b * $c; // $b = 5 * 3 = 15
    $c = $a - $c; // $c = 15 - 3 = 12

    echo "$a, $b, $c"; //  exibe os valores de $a, $b, $c


    


    ?>

</body>
</html>