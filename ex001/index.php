    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MEU PRIMEIRO CÓDIGO</title>
    </head>
    <body>
    <h2>
    <?php 

    $nome = "ana";
    $sobrenome = "campos";

    //a variavel pode ser mudada
    $nome = "lucas";

    //quebra de linha antes do proximo echo
    echo "<br> <br>";

    //declarando uma constante
    const time = "são paulo";
    const timenovo = "real madrid ";

    echo  "seja bem-vindo, $nome $sobrenome  <br> <br> seu time  é " . time;

    ?>
    </h2>
    </body>
    </html>