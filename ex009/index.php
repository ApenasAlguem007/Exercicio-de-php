<!DOCTYPE html>
<html lang="pt-br
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>condicional Switch</title>
</head>
<body>
    
<h2> Condicional Switch</h2>

    <?php 

    //condicional switch

    $fruta = "maça";

    switch ($fruta){
        case "banana":
            echo "A fruta é uma banana!";
        break;

        case "maça":
            echo " A fruta é uma maça!";
        break;
        
        case "laranja":
            echo "A fruta é uma laranja!";
        break;

        default:
            echo " Fruta desconhecida!";
            break;
        }

        // case = 1 = 2 ?; acessa o que está na variavel e verifica sua veracidade, comparando ambas.

            echo "<br>";

            $cor = azul

            switch($cor){

                case "vermelho":
                case "laranja":
                    echo " A cor é quente!";
                    break;
                case "azul":
                case "verde":
                    echo "a cor é fria!";
                    break;
                default:
                echo "Cor desconhecida!";
                break;

            }






        

    




?>

</body>
</html>