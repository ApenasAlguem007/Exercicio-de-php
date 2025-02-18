<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Modificadores de Acesso </title>
</head>
<body>
    
    <h1> Modificadores de Acesso </h1>

    <?php 
    
    
        // Dentro de uma classe vai: atributos e métodos.
        // Fora da classe vão os chamados e dados 



    class Funcionario{

        // Propriedade com diferentes modificadores de acesso

        public $nome;  // Pode ser acessado em qualquer lugar

        protected $salario; // Pode ser acessado apenas dentro de uma superclasse e subclasse

        private $cpf; // Pode ser acessado apenas dentro da classe

        // construtor

        public function __construct($nome, $salario, $cpf){

            $this -> nome = $nome;
            $this -> salario = $salario;
            $this -> cpf = $cpf;

        }

        // Método publico para receber o nome do funcionario

        public function exibirNome(){
            echo "Nome: " . $this->nome . "<br>";

        }

        // Método protegido para exibir o salario ( somente para subclasses ou na primeira classe)

        protected function exibirSalario(){
            echo "Salário: R$ " . $this -> salario . "<br>";

        }

        // Método privado para exibir o cpf ( somente dentro da classe )

        private function exibirCpf(){
            echo "CPF: " . $this->cpf . "<br>";

        }

        // Método publico para chamar o metodo privado e protegido na propria classe

        public function exibirDetalhes(){
            
                $this-> exibirNome();
                $this->exibirSalario();
                $this-> exibirCpf();
            
        }


    }

        // Instanciar = inserir dados de algo, alguem.. 

        // Criando uma instancia da classe Funcionario

        $funcionario1 = new Funcionario("Carlos Silva", 7000, "123.456.789-00");  
        
        // tudo isto será armazenado na linha de codigo cinstruct, na linha 26; Depois vai para os atributos ( linhas 18, 20 e 22 );

        // Modo alternarivo de fazer isto:

        //$funcionario2 = new Funcionario();
        //$funcionario2-> nome = "Maria";  (...)


        // Acessando o nome diretamente (público)

            $funcionario1->exibirNome();

            // Acessando salario ( Protegido ); Não é possivel acessar por ser um método Protegido, Duh.

            // $funcionario1->exibirSalario(); dá erro por ser protegido.

            // Acessando CPF diretamente ( Privado ); Não é possivel acessar por ser um método privado.

            // $funcionario1 -> exibirCpf(); comentado pois não é possivel acessar.


            // demonstrando mesmo sendo metodos publicos e privados: Burlar

            // Chamando ométodo publico que acesso todos os dados

            $funcionario1->exibirDetalhes();
    ?>


</body>
</html>