<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>emprestimo</title>
</head>
<body>

<p> Empréstimo Bancário </p>

<?php 

$emprestimo = 1000;
$parcelas = 10;
$juros = 1 + 0.15;



$calc = $emprestimo*($juros)/$parcelas;

echo "o empréstimo efetuado foi de: R$ $calc ";

?>

</body>
</html>