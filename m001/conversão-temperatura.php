<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversão de Temperatura</title>
</head>
<body>

<h2> Conversão de Fahrenheint para Celsius </h2>


 <?php
 
 const divisão = 5/9;
 
 $Fahrenheint = 98.6;

// conversão do . em ,

$Fahrenheint_formatado = number_format ( $Fahrenheint, 2, ',', '.');

 // cálculo em linha

 $Celsius = ( $Fahrenheint - 32) * divisão;

echo "($Fahrenheint_formatado) °F é = ( $Celsius ) °C";

 ?>

 
<h2> Conversão de Celsius para Fahrenheint </h2>


<?php 

const dividindo = 9 / 5;

$celsius = 45;

// conversão do . em , 

$celsius_formatado = number_format ( $celsius, 2 , ",", "."); 

$farenheint = ($celsius * dividindo) + 32;


echo "($celsius_formatado) °C é = ( $Fahrenheint_formatado ) °F ";


?>

    
</body>
</html>