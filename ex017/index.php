<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constrtor e Destrutor </title>
</head>
<body>
    
<h1> Construtor e Destrutor </h1>

    <?php 

    // 

    class Produto{

        // atributos

        public $nome;
        public $preco;

        // construtor: chamado qaundo o objeto é criado

        public function __construct( $nome, $preco){
            $this->nome = $nome;
            $this->preco = $preco;

            echo "Produto  '$this->nome' criado com sucesso! <br>";
        }

    }

    // criando um objeto

    $produto1 = new Produto("Camiseta", 39.90); // Construtor chamado aqui
    $produto2 = new Produto("Calça", 50.00);

    ?>

</body>
</html>