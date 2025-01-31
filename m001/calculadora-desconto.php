<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de desconto</title>
</head>
<body>
    <h2>desconto<h2>
<?php 

//VALORES
$valor_original = 130;
$desconto  = 20;

//CALCULO
$desconto = ($valor_original * $desconto) / 100;
$valor_com_desconto = $valor_original - $desconto;

echo "Valor original: R$ $valor_original\n <br>";
echo "desconto: $desconto\n <br>";
echo "valor com desconto: R$ $valor_com_desconto\n <br>";


?>
</body>
</html>