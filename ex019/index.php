<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Heranças e Polimorfismo </title>
</head>
<body>
    
    <h1> Heranças e Polimorfismo </h1>

    <?php 
    
    // Classe Base ( superclasse )
    // ($nome) = dentro de uma função se chama parametro. $nome sozinho = variavel
    
    class Animal{
        
        // Propriedade ou atributo
        public $nome;

        // Método 
        public function __construct ($nome){
                $this -> nome = $nome;
        }

        public function falar(){
            return "O animal faz um som. ";

        }
    }

        // subclasse que herda de Animal

        class Cachorro extends Animal{

            // Sobrescrevendo o método falar

            public function falar(){
                return "O cachorro late. ";

            }

        }

        // Criando um objeto da classe cachorro

        $cachorro = new Cachorro("Ryuk");
        echo $nome = $cachorro -> nome; // exibe o nome

        echo "<br>";

        // Chamando o método sobrescrito da subclasse
        echo $cachorro ->falar();
    
        echo "<br>";

        // Mostrando o método falar da superclasse

        $animal = new Animal ("Animal");
        echo $animal -> falar();

    ?>


</body>
</html>