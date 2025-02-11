<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Funçoes </title>
</head>
<body>
    
    <h2> Funções </h2>
    
    <?php 
    
    function saudacao(){

        echo "Olá, seja bem-vindo ao PHP!";

    }    
    
    saudacao();  // chamando a função, ela irá exibir algo na tela.

    echo "<br>";

    function somar ($a, $b){
        return $a + $b;

    }
    
    $resultado = somar(5,3); // chamando a função e passando os argumentos

        echo "Resultado da soma: " . $resultado; // saída

        echo "<br>";

        $resultado1 = somar(8, -2);
        echo "Resultado da soma: " . $resultado1; // saída

        echo "<br>";

        function saudacaoPersonalizada($nome = "Visitante"){

            echo "Olá $nome! Bem-vindo ao PHP! ";

        }

        saudacaoPersonalizada(); // chamada sem argumento, usa o valor padrão
        echo "<br>";
        saudacaoPersonalizada("Akira"); // chamada com argumento



    ?>

</body>
</html>