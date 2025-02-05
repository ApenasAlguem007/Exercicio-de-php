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

echo "Array original: ";
print_r ($array);

echo "<br>";
echo "<br>";


// adicionando um valor oa final da array

$array[] = 50;

// exibindo o array atualizado 

echo " Array após adicionar o 50: ";

print_r($array);

echo "<br>";
echo "<br>";

// mudando o valor da pposiçao 1 para 25
$array[1] = 25; 

echo "Array após alterar o valor na posição 1 para 25: ";

print_r($array);

echo "<br>";
echo "<br>";

// remoevendo o valor no indice 2

unset($array[2]);


// reorganizando os indices do array

$array = array_values($array);

// exibindo o array após remover o indice

echo "Array depois de remover o valor no indice 2: ";
print_r($array);

echo "<br>";
echo "<br>";

// adicionando um numero na array ( após o 50 )

$array[] = 19;

// ordenar o array utilza este comando abaixo, para deixar o numero em ordem crescente, para depois do 10, ao invés de deixa-lo após o 50:

sort($array);


//exibindo o array ordenado

echo "Array após ordenar os valores: ";

print_r($array);





?>

</body>
</html>