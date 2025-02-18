<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Polimorfismo </title>
</head>
<body>

    <h1>Polimorismo</h1>
    
    <?php 
    
    // Superclasse
    class Animal{
        public function fazerSom(){
            return "O animal faz um som. ";
        }
    }
    
    // Subclasse
    class Cachorro extends Animal{
        public function fazerSom(){
            return "Au au au au ";
        }
    }
    

    // outra Subclasse

    class Gato extends Animal{
        public function fazerSom(){
            return "Miaaaaaaaaaau";
        }
    }

         // Criando polimorfismo ( criando função que utiliza polimorfismo)

         function emitirSomAnimal(Animal $animal){
            echo $animal -> fazerSom() . "<br>";

            // para emitir algo, precisamos fazer uma instancia, caso contrário não irá funcionar

         }
        

    // Criando Objetos - instancias

    $cachorro1 = new Cachorro(null);
    $gato1 = new Gato(null);

    // emitindo mensagem ( no caso, o som )

    echo $cachorro1 -> fazerSom();
    echo "<br>";
    echo $gato1 -> fazerSom();
    echo "<br>";


    // Chamando a função com diferentes objetos, mas com amesma assinatura da função.
    echo "<br>";
    emitirSomAnimal($cachorro1);
    emitirSomAnimal($gato1);


    
    ?>

</body>
</html>