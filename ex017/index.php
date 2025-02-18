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

        // construtor: chamado quando o objeto é criado

        public function __construct($nome, $preco){
            $this->nome = $nome;
            $this->preco = $preco;

            echo "Produto  '$this->nome' criado com sucesso! <br>";
        }

        // Destrutor: Chamado quando o objeto é destruido.

        public function __destruct(){

            echo "Produto '$this->nome' foi destruido! <br>";
        }

        // Método para exibir o detalhe do produto

        public function exibirDetalhes(){
            echo "Nome: $this->nome, Preço: R$ $this->preco <br>";

        }

    }

    // criando um objeto

    $produto1 = new Produto("Camiseta", 39.90); // Construtor chamado aqui.

    $produto2 = new Produto("Calça", 50.00);// Construtor chamado aqui.

    // exibe o produto

    $produto1 -> exibirDetalhes();
    $produto2-> exibirDetalhes();


        // Quando o script termina ou o objeto sai de escopo, o destrutor é chamado 
        unset($produto1); // Chama o destrutor explicitamente




        // Mais uma classe construct e destruct

        class ConexaoBanco{
            private $conexao; 

            // Construtor: Simula abrir uma conexao com o banco
            public function __construct(){
                $this->conexao = "Conexão ao banco de dados foi aberta!";

                echo $this->conexao . "<br>";

            }

            // Destrutor: Simula fechar a conexao com o banco

            public function __destruct(){
                echo "Conexão ao banco de dados fechada! <br>";

            }

        }

        // Criando objeto de conexão 

        $conectado = new ConexaoBanco(); // Construtor é chamado aqui

         unset($conexao); // chama o destrutor explicitamente



        // temporizador antes de alguma mensagem

        sleep(2); // espera dois segundos antes de exibir a mensagem

    ?>

</body>
</html>