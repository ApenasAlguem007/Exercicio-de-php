<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Lógicos</title>
</head>
<body>
    
<h2></h2>

<?php 

$idade = 20;

$tem_cnh = true;

echo ($idade >= 18 and $tem_cnh) ? /*o que vem dois da interrogação é true*/  "você pode dirigir." : /* significa "se não;" é uma condição, mas sempre signifca false  */ "Você não pode dirigir.";

echo "<br>";

$tem_ingresso = false;
$tem_cortesia = true;

echo ($tem_ingresso or $tem_cortesia) ? "Você pode entrar na festa." : "Você não pode entrar na festa.";

echo "<br>"; // isso pula uma linha.

// se tiver uma afirmação verdadeiro ao lado de or, o resultado sempre será True.

// And = &&; or = ||;

// testando simbolos && e ||.

$sol = true;
$sem_chuva = false;
$feriado = true;

echo ($sol && $sem_chuva || $feriado) ? " Você pode sair para passear." : " Melhor ficar em casa.";



?>

</body>
</html>