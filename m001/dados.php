<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Coleta os dados do formulário
    $nome = htmlspecialchars($_POST['nome']);
    $idade = htmlspecialchars($_POST['idade']);
    $cidade = htmlspecialchars($_POST['cidade']);
   
    // Exibe os dados coletados usando concatenação e interpolação
    echo "<h2>Informações do Usuário</h2>";
    echo "Nome: " . $nome . "<br>";
    echo "Idade: " . $idade . "<br>";
    echo "Cidade: " . $cidade . "<br><br>";
   
    // Exibe a mensagem de boas-vindas personalizada usando concatenação
    echo "<h2>Meu nome é " . $nome . ", tenho " . $idade . " anos e moro em " . $cidade . ".</h2>";
   
    // Exibe a mensagem de boas-vindas personalizada usando interpolação
    echo "<h2>Seja bem-vindo, $nome! Você tem $idade anos e mora em $cidade.</h2>";
} else {
    echo "Método de requisição inválido.";
}