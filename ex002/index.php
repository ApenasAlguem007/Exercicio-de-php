<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos de variáveis</title>
</head>
<body>
  </h2>
  <?php 
  //variável do tipo string
  $sobrenome = "campos";

  //variável do tipo int
  $idade = 17;

  //variável do tipo float 
  $peso = 64.5;

  //variável do tipo boolean (verdadeiro ou falso)
  $casado = true;

  echo "$sobrenome $idade $peso";

  //método1: usando var_dump para exibir valor booleano
  var_dump(); //exibe 'bool(false')

  //metodo 2: usando uma conversão booleana para string
  echo ($casado ? "casado" : "Não casado"); //exibe 'nao casado'

  ?>  
  </h2>
</body>
</html>