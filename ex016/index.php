<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classes e Objetos</title>
</head>
<body>
    

<h1> Classes e Objetos </h1>

    <?php 
    
    // classes sempre se declaram com letras maiusculas

   class Carro{

    // propriedades ou atributos

    public $marca;
    public $modelo;
    public $ano;

    // métodos (Função dentro da classe) ( metodos sao sempre publicos )

    public function exibirDetalhes(){

        echo "Marca: " . $this->marca .  "<br>";

        echo "Modelo: " . $this->modelo . "<br>";

        echo "Ano: " . $this->ano . "<br>";
    }

   } 

   // Instancia

   $meuCarro = new Carro(); 
   $meuCarro->marca = "Toyota";
   $meuCarro->modelo = "Corolla";
   $meuCarro->ano = 2023;

   $meuCarro->exibirDetalhes(); // exibe os detalhes do carro 
    




   // nova Classe

   class Pessoa{

    // Propriedades ou atributos

    public $nome;
    public $idade;


     // método

    public function saudacao(){
     echo "Olá, meu nome é " . $this->nome . " e tenho " . $this->idade . " anos. <br>";

        }

   }

   $akira = new Pessoa();
    $akira->nome = "Akira";
    $akira->idade = 20;

    $akira->saudacao(); // exibe a saudação com os dados de Akira

    $maria = new Pessoa();
    $maria-> nome = "Maria";
    $maria-> idade = 34;

   $maria-> saudacao(); // exibe a saudação com os dados de maria agora. 
   
    ?>




</body>
</html>