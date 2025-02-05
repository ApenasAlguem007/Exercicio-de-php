<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Array e Matriz</title>
</head>
<body>
    
    <h2> Array e Matriz </h2>

    <?php 
    
    // criando uma array associativa 

    $associativo = [
        "nome" => "João", 
        "idade" => 30,
        "cidade" => " São Paulo"
    ];
    
    echo "<br>";

    // exibindo um array associativo 

    echo "Array associativo:";
    print_r($associativo);
    echo "<br>";
    print_r($associativo["nome"]); // acessando nome João
    
    echo "<br>";
    echo "<br>";
    // acessandoo nome João de outra maneira

    $primeiroValor = reset($associativo);

    echo $primeiroValor; // saida João
    echo "<br>";
    echo "<br>";

    // criando uma array multidirecional 

    $multidirecional = [

        [1, 2, 3],
        [4, 5, 6],
        [7, 8, 9]

    ];


    // exibindo um valor na posição [1] [2] (4, 5, 6) -> 6

    echo "Valor na posição [1] [2]: " . $multidirecional [1] [2];

    echo "<br>";
    echo "<br>";
    $array1 = [1, 2 ,3 ];
    $array2 = [ 4, 5 ,6 ];

    // mesclando dois arrays:

    $novo_array = array_merge($array1, $array2);

    // exibindo o array resultante:

    echo "array mesclado ";
    print_r($novo_array);

    echo "<br>";
    echo "<br>";
    
    $array4 = [10, 20, 30, 40];

    // procurando o valor 30 no array 
    $indice = array_search(30, $array4);

    // exibinfo o indice onde o valor foi encontrado 
    echo " O indice do valor 30 é: " . $indice;
    
    echo "<br>";
    echo "<br>";

    // verifica se um valor existe no array:

        $existe = in_array(25, $array4);

        // exibindo se o valor exite ou  não:

        if($existe) {

            echo "O valor 25 está no array.";

            } else {

            echo "O valor 25 não está no array.";

         }

         // if sempre será true, enquanto else sempre será false.

         echo "<br>";
         echo "<br>";
        
         // matriz 3x2

         $matriz = [

            [ 1, 2],   // Primeira linha
            [ 3, 4],  // Segunda linha
            [ 7, 8]  // terceira linha

         ];

    
         echo "<br>";
         echo "<br>";

         // acessando elemento da matriz

         echo "Elemento na posição [0][1]: " .  $matriz[0][1] . "<br>"; //  saida: 2

         echo "Elemento na posição [2][0]: " . $matriz[2][0] . "<br>"; // saida: 7




    ?>

</body>
</html>