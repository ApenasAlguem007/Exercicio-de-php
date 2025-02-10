<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While e Do While</title>
</head>
<body>
    
        <h2> While e DO While  </h2>

    <?php 
    
            // chamamos o while de "enquanto". se a condição for verdadeira ele faz um loop contanto que seja true; 
            
            // Do while chamamos de Do ( faça ) while ( enquanto ). 

            // while - faz enquanto tiver algo a disposição, se não houver, não continua o processo. ( automatico )
            
            // Do while - Faz só uma vez, e as demais ela pode ou não executar. ( faz manualmente primeiro, depois automatiza )
    


            // while

            $i = 1;
                while($i <=5){
                    echo $i . "<br>"; // imprime o valor de $i

                    $i++; // Itto é: i+1.. Mais o valor de 1. Literalmente um "Some 1 + 1 ".
                    }
    
            echo "<br>";     
            // mostrando somente numeros pares com while

            $f = 2;
                    while($f <= 10 ) {

                        echo $f . "<br>";
                        $f += 2;  // incrementa de 2 em 2 " some o resultado atual da variavel + 2 "

                    }
               
                    echo "<br>";

            // do while 
            $g = 1;

             do {
                 echo $g . "<br>";
                 $g++;
            } while ($g <= 7 );

    // a diferença: Do while efetua o comando ao menos 1 vez, mesmo não sendoo requisitado. Já o While, não demonstra, ele sequer executa.


    ?>

</body>
</html>