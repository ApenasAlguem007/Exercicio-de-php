<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>
    
<h2> Array </h2>

<?php 

// Array é uma lista de variaveis de diversos tipos.

// criaçao de array indexado

$array = [10, 20, 30, 40];

// exibindo o array de forma legivel

echo "Array original:";
print_r ($array);

echo "<br>";

// adicionando um valor oa final da array

$array[] = 50;

// exibindo o array atualizado 

echo " Array após adicionar o 50";

print_r($array);

echo "<br>";

// mudando o valor da pposiçao 1 para 25

$array[1] = 25; 

echo "Array após alterar o valor na posição 1 para 25: ";

print_r($array);

?>

</body>
</html>