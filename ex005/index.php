<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Atribuição</title>
</head>
<body>
    <h2>Operadores de Atribuição</h2>
    <?php 
    //string
    $rua = "rua amador bueno";
    //atribuição com concatenação 
    $rua .= " na cidade de São Paulo";

    //float
    $preco = 2.45;
    //atribuição de soma
    $preco += 2.30;
    //atribuiçao de subtração
    $preco -= 1.30;
    //atribuição de multiplicação
    $preco *= 2.50;

    //formata o número para usar vírgula como separador decimal
    $preco_formatado = number_format($preco, 2, ',', '.');
    
    //exibe o resultado - por interpolação
    echo "$rua, <br> preço R$ $preco_formatado";
    ?>
</body>
</html>